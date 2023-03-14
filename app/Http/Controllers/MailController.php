<?php
//php artisan make:controller MailController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class MailController extends Controller
{
    // function index()
    // {
    //  return view('mail');
    // }

    function send(Request $request)
    {
        $admin="customer.care@greenfoot.com";

        $this->validate($request,
        [
            'm_name'=>"required|string|max:100|regex:/^([a-zA-Z',.-]+( [a-zA-Z',.-]+)*)$/",
            'm_phone' => 'required|digits:11|regex:/^(01[3456789][0-9]{8})$/',
            'm_email'=>'required|email|max:100',
            'm_message'=>'required|string|max:500',
        ],
        [
            'm_name.required'=>'Please enter Name',
            'm_name.string'=>'Name must be a string, Please enter a valid Name',
            'm_name.max'=>'Please enter a Name under 100 characters',
            'm_name.regex'=>'Please enter a valid Name',

            'm_phone.required'=>'Please enter Phone Number',
            'm_phone.digits'=>'Phone Number must be 11 digits',
            'm_phone.unique'=>'Nubmer exists. If you already have an account, Please Login',
            'm_phone.regex'=>'Please enter a valid Phone Number.',

            'm_email.required'=>'Please enter Email',
            'm_email.email'=>'Please enter a valid Email',
            'm_email.max'=>'Please enter a Email under 100 characters',
            'm_email.unique'=>'Email exists. If you already have an account, Please Login',

            'm_message.required'=>'Please enter Address',
            'm_message.string'=>'Address must be a string, Please enter a valid Address',
            'm_message.max'=>'Please enter a address under 500 characters',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->to(app('url')->previous()."#contact")->withErrors($validator)->withInput();
        // }


        $output="<h1>Submitted<h1>";

        $output.="Name: ".$request->m_name;
        $output.="Phone: ".$request->m_phone;
        $output.="Email: ".$request->m_email;
        $output.="Message: ".$request->m_message;

    if(isset($error))
    {
        return $output;
    }
        $mailData = [
            'name'      =>  $request->m_name,
            'email'      =>  $request->m_email,
            'phone'      =>  $request->m_phone,
            'message'   =>   $request->m_message
        ];

     Mail::to($admin)->send(new SendMail($mailData));
    //return back()->with('c_message', 'Thanks for contacting us!');
    return redirect()->to('/home'.'/#footer_message')->with('c_message', 'Thanks for contacting us!');


    }
    
}
