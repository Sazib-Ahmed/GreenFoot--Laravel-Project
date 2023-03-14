@extends('layouts.User')
@section('title')
Registration
@endsection

@section('body')
@if (Cookie::get('background')!== null)
<body id="{{Cookie::get('background')}}">
@else
<body id="backgrounddefault">
@endif

@section('pagename','User Login')

@section('content')
    <form action="/user/register" class="box" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <h1>Registration</h1>
                

                <input type="text" name="u_name" placeholder="Enter Name*" autofocus value="{{old('u_name')}}" require>
                <h3>
                @if ($errors->has('u_name'))
                {{ $errors->first('u_name') }}
                @endif
                </h3>



                <input type="text" name="u_dob" placeholder="Enter Date of Birth*" min="1930-11-07" max="2015-11-07" onfocus="(this.type='date')" value="{{old('u_dob')}}" require>
                <h3>
                @if ($errors->has('u_dob'))
                {{ $errors->first('u_dob') }}
                @endif
                </h3>

                
                <input type="text" name="u_phone" placeholder="Enter Phone Number*" onfocus="(this.type='number')" value="{{old('u_phone')}}" require>
                <h3>
                @if ($errors->has('u_phone'))
                {{ $errors->first('u_phone') }}
                @endif
                </h3>


                <input type="text" name="u_email" placeholder="Enter Email*" value="{{old('u_email')}}" require>
                <h3>
                @if ($errors->has('u_email'))
                {{ $errors->first('u_email') }}
                @endif
                </h3>

                
                <input type="text" name="u_address1" placeholder="Enter Address 1*" value="{{old('u_address1')}}" require>
                <h3>
                @if ($errors->has('u_address1'))
                {{ $errors->first('u_address1') }}
                @endif
                </h3>

                
                <input type="text" name="u_address2" placeholder="Enter Address 2" value="{{old('u_address2')}}" require>
                <h3>
                @if ($errors->has('u_address2'))
                {{ $errors->first('u_address2') }}
                @endif
                </h3>


                <input type="text" name="u_password" placeholder="Enter Password*" onfocus="(this.type='password')" value="{{old('u_password')}}" require>
                <h3>
                @if ($errors->has('u_password'))
                {{ $errors->first('u_password') }}
                @endif
                </h3>

                
                <input type="text" name="u_profile_pic" placeholder="Upload Profile Picture" onfocus="(this.type='file')" value="{{old('u_profile_pic')}}">
                <h3>
                @if ($errors->has('u_profile_pic'))
                {{ $errors->first('u_profile_pic') }}
                @endif
                </h3>


                <input type="submit" name="" value="Register">
        </form>   
@endsection