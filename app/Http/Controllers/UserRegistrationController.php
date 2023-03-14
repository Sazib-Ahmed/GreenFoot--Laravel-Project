<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\DateTime;
use Carbon\Carbon;

class UserRegistrationController extends Controller
{

    function getUserRegistration()
    {
        return view('UserRegistration');
    }

    function getUserRegister(Request $request)
    {
        $this->validate($request,
        [
            'u_name'=>"required|string|max:100|regex:/^([a-zA-Z',.-]+( [a-zA-Z',.-]+)*)$/",
            'u_dob'=>'required|date',
            'u_phone' => 'required|digits:11|unique:users,u_phone|regex:/^(01[3456789][0-9]{8})$/',
            'u_email'=>'required|email|max:100|unique:users,u_email',
            'u_address1'=>'required|string|max:100',
            'u_address2'=>'sometimes|nullable|string|max:100',
            'u_password'=>'required|min:8|max:100|regex:/^((?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,})$/', 
            //Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
            'u_profile_pic'=> 'sometimes|nullable|mimes:png,jpeg,gif,jpg',

        ],
        [
            'u_name.required'=>'Please enter Name',
            'u_name.string'=>'Name must be a string, Please enter a valid Name',
            'u_name.max'=>'Please enter a Name under 100 characters',
            'u_name.regex'=>'Please enter a valid Name',

            'u_dob.required'=>'Please select Date of Birth',
            'u_dob.date'=>'Date of Birth must be date',

            'u_phone.required'=>'Please enter Phone Number',
            'u_phone.digits'=>'Phone Number must be 11 digits',
            'u_phone.unique'=>'Nubmer exists. If you already have an account, Please Login',
            'u_phone.regex'=>'Please enter a valid Phone Number.',

            'u_email.required'=>'Please enter Email',
            'u_email.email'=>'Please enter a valid Email',
            'u_email.max'=>'Please enter a Email under 100 characters',
            'u_email.unique'=>'Email exists. If you already have an account, Please Login',

            'u_address1.required'=>'Please enter Address',
            'u_address1.string'=>'Address must be a string, Please enter a valid Address',
            'u_address1.max'=>'Please enter a address under 100 characters',
            //'u_address1.regex'=>'Please enter a valid Address',

            'u_address2.string'=>'Address must be a string, Please enter a valid Address',
            'u_address2.max'=>'Please enter a address under 100 characters',
            //'u_address2.regex'=>'Please enter a valid Address',

            'u_password.required'=>'Please enter Password',
            'u_password.min'=>'Please enter a Password with minimum 8 characters',
            'u_password.max'=>'Please enter a Password under 100 character',
            'u_password.regex'=>'Password must contain at least one uppercase, one lowercase letter, one number and one special character',

            'u_profile_pic.required'=>'Plese choose a image',
            'u_profile_pic.mimes'=>'Plese upload JPEG, JPG, PNG or GIF image',
        ]);


    $output="<h1>Submitted<h1>";

        $output.="Name: ".$request->u_name;
        $output.="Date of Birth: ".$request->u_dob;
        $output.="Phone: ".$request->u_phone;
        $output.="Email: ".$request->u_email;
        $output.="Address 1: ".$request->u_address1;
        $output.="Address 2: ".$request->u_address2;
        //$output.="Password: ".$request->u_password;
        //$output.="Profile Picture: ".$request->u_profile_pic;

    if(isset($error))
    {
        return $output;
    }
    else
    {
        
        $u_cal_age = Carbon::parse($request->u_dob)->age;
        $usetable=new Users();
        $usetable->u_name=$request->u_name;
        $usetable->u_dob=$request->u_dob;
        $usetable->u_age=$u_cal_age;
        $usetable->u_phone=$request->u_phone;
        $usetable->u_email=$request->u_email;
        $usetable->u_address1=$request->u_address1;
        $usetable->u_address2=$request->u_address2;
        $usetable->u_password=$request->u_password;

        if($request->hasFile('u_profile_pic')) {
            $destination_path = 'public/ProfilePictures';
            //$image=$request->hasFile('u_profile_pic');
            $image_name= $request->file('u_profile_pic')->getClientOriginalName();
            $path = $request->file('u_profile_pic')->storeAs($destination_path,$image_name);
            $usetable->u_profile_pic=$image_name;
        }
        
        $usetable->save();
        return redirect('user/login')->with('registration_message','Registration Successful');
    }
        
    }

}

?>
