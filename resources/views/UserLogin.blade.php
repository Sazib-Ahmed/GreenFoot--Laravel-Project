@extends('layouts.User')
@section('title','Login')

@section('body')
@if (Cookie::get('background')!== null)
<body id="{{Cookie::get('background')}}">
@else
<body id="backgrounddefault">
@endif

@section('content')
{{session('registration_message')}}
<form class="box" action="/user/login/verify" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            @if (session()->get('loginerrors')==null &&  $errors->first('u_email')==null &&  $errors->first('u_password')== null)
            
            <img src="{{asset('/storage/ProfilePictures/avatar.gif')}}" class="avatar">
            
@else
<img src="{{asset('/storage/ProfilePictures/failavatar.gif')}}" class="avatar">

@endif

            
            <br><br><br><br><br> <br><br>

  <h1>Login</h1>
  <h3> {{session()->get('loginerrors')}}</h3>
  
  <h3> {{session()->get('registration_message')}}</h3>
  <input type="text" name="u_email" placeholder="Enter your email" value="{{old('u_email')}}" require autofocus>
  <h3>@if ($errors->has('u_email'))
                {{ $errors->first('u_email') }}
                @endif</h3>
                <input type="text" name="u_password" placeholder="Enter Password" onfocus="(this.type='password')" value="{{old('u_password')}}" require>
  <h3>@if ($errors->has('u_password'))
                {{ $errors->first('u_password') }}
                @endif</h3>
  <input type="submit" name="" value="Login">


</form>




@endsection