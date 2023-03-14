<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ProfileUpdateController extends Controller
{

    function getProfile()
    {
        return view('UserProfile');
    }

    function getProfileUpdate(Request $request)
    {
        $u_id=session()->get('u_id');

        $this->validate($request,
        [
            'u_name'=>"sometimes|nullable|string|max:100|regex:/^([a-zA-Z',.-]+( [a-zA-Z',.-]+)*)$/",
            'u_dob'=>'sometimes|nullable|date',

            
            //'u_phone' => "sometimes|nullable|digits:11|unique:users,u_phone".$u_id."|regex:/^(01[3456789][0-9]{8})$/",
            //'u_email' => ['required','email', Rule::unique('users')->ignore($u_id)],
            //u_email'=>'sometimes|nullable|email|max:50|unique:users,u_email'.$u_id,
            'u_phone' => "sometimes|nullable|digits:11|regex:/^(01[3456789][0-9]{8})$/",
            'u_email'=>'sometimes|nullable|email|max:50',

            'u_address1'=>'sometimes|nullable|string|max:100',
            'u_address2'=>'sometimes|nullable|string|max:100',
            'u_password'=>'sometimes|nullable|min:8|max:100|regex:/^((?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,})$/', 
            //Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
            'u_profile_pic'=> 'sometimes|nullable|mimes:png,jpeg,gif,jpg',

        ],
        [
            //'u_name.required'=>'Please enter Name',
            'u_name.string'=>'Name must be a string, Please enter a valid Name',
            'u_name.max'=>'Please enter a Name under 100 characters',
            'u_name.regex'=>'Please enter a valid Name',

            //'u_dob.required'=>'Please select Date of Birth',
            'u_dob.date'=>'Date of Birth must be date',

            //'u_phone.required'=>'Please enter Phone Number',
            'u_phone.digits'=>'Phone Number must be 11 digits',
            'u_phone.unique'=>'Nubmer exists. If you already have an account, Please Login',
            'u_phone.regex'=>'Please enter a valid Phone Number.',

           //'u_email.required'=>'Please enter Email',
            'u_email.email'=>'Please enter a valid Email',
            'u_email.max'=>'Please enter a Email under 100 characters',
            'u_email.unique'=>'Email exists. If you already have an account, Please Login',

            //'u_address1.required'=>'Please enter Address',
            'u_address1.string'=>'Address must be a string, Please enter a valid Address',
            'u_address1.max'=>'Please enter a address under 100 characters',
            //'u_address1.regex'=>'Please enter a valid Address',

            'u_address2.string'=>'Address must be a string, Please enter a valid Address',
            'u_address2.max'=>'Please enter a address under 100 characters',
            //'u_address2.regex'=>'Please enter a valid Address',

            //'u_password.required'=>'Please enter Password',
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
        $user=Users::where('u_id',session()->get('u_id'))->first();

        if($request->filled('u_name')) {
            $user->u_name=$request->u_name;
            $request->session()->put("u_name",$request->u_name);
        }
        if($request->filled('u_dob')) {
            $u_cal_age = Carbon::parse($request->u_dob)->age;

            $user->u_dob=$request->u_dob;
            $request->session()->put("u_dob",$request->u_dob);
            $user->u_age=$u_cal_age;
            $request->session()->put("u_age",$u_cal_age);
        }
        if($request->filled('u_phone')) {
            $user->u_phone=$request->u_phone;
            $request->session()->put("u_phone",$request->u_phone);
        }
        if($request->filled('u_email')) {
            $user->u_email=$request->u_email;
            $request->session()->put("u_email",$request->u_email);
        }
        if($request->filled('u_address1')) {
            $user->u_address1=$request->u_address1;
            $request->session()->put("u_address1",$request->u_address1);
        }
        if($request->filled('u_address2')) {
            $user->u_address2=$request->u_address2;
            $request->session()->put("u_address2",$request->u_address2);
        }
        if($request->filled('u_password')) {
            $user->u_password=$request->u_password;

        }
        if($request->hasFile('u_profile_pic')) {
            // $path = $request->file('u_profile_pic')->store('public/storage/ProfilePictures',$request->u_email.'.gif');
            // $user->u_profile_pic=$path;
             Storage::delete('public/ProfilePictures'.session()->get('u_profile_pic'));
            // $request->session()->put("u_profile_pic",$path);

            $destination_path = 'public/ProfilePictures';
            //$image=$request->hasFile('u_profile_pic');
            $image_name= $request->file('u_profile_pic')->getClientOriginalName();
            $path = $request->file('u_profile_pic')->storeAs($destination_path,$image_name);
            $user->u_profile_pic=$image_name;
            $request->session()->put("u_profile_pic",$image_name);
        }


        $user->save();
        return redirect('user/profile')->with('update_message','Successfully Updated');
        //return redirect('user/login')->with('registration_message','Registration Successful');

    }

        
    }

}

?>
