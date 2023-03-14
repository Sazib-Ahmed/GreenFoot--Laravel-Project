<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Feedbacks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserLoginController extends Controller
{
    function getUserLogin()
    {
        return view('UserLogin');
    }

    function getLogout()
    {
        session()->flush();
        return redirect('home');
    }

    function getUserHome()
    {
        return view('UserHome');
    }

    


    function getUserLoginVerify(Request $request)
    {


        $this->validate($request,
        [
            'u_email'=>'required|email|max:100', //|unique:users,u_email
            'u_password'=>'required|min:8|max:100|regex:/^((?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,})$/', 
            //Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character

        ],
        [
            'u_email.required'=>'Please Enter Email',
            'u_email.email'=>'Please enter a valid Email',
            'u_email.max'=>'Please enter a Email under 100 characters',
            //'u_email.unique'=>"Email does not exists. If you don't have an account, Please Register first",

            'u_password.required'=>'Please Enter Password',
            'u_password.min'=>'Please enter a Password with minimum 8 characters',
            'u_password.max'=>'Please enter a Password under 100 character',
            'u_password.regex'=>'Password must contain at least one uppercase, one lowercase letter, one number and one special character',

        ]);


        $output="<h1>Submitted<h1>";


        $output.="Email: ".$request->u_email;
        $output.="Password: ".$request->u_password;

        if(isset($error))
        {
            return $output;
        }
        else
        {
        
            $user = DB::table('users')->where('u_email', $request->u_email)->first();//Users::find($request->u_email);

            //
            $loginerrors="Oops, Wrong Inputs.";
            if(empty($user->u_email ))
            {
                return back()->with([ 'loginerrors' => $loginerrors ]);

            }
            else{


                if(trim($user->u_email) == trim($request->u_email) && trim($user->u_password) == trim($request->u_password))
            {
                $request->session()->put("u_id",$user->u_id);
                $request->session()->put("u_name",$user->u_name);
                $request->session()->put("u_dob",$user->u_dob);
                $request->session()->put("u_age",$user->u_age);
                $request->session()->put("u_phone",$user->u_phone);
                $request->session()->put("u_email",$user->u_email);
                $request->session()->put("u_address1",$user->u_address1);
                $request->session()->put("u_address2",$user->u_address2);
                $request->session()->put("u_profile_pic",$user->u_profile_pic);
                $request->session()->put("created_at",$user->created_at);
                $request->session()->put("updated_at",$user->updated_at);

                
            
                return redirect('/user/carbonfootprint');

            }
            else{
                return back()->with([ 'loginerrors' => $loginerrors ]);
            }


            }


                

            

            

        }
       
    }
}
