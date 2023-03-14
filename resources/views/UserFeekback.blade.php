@extends('layouts.User')
@section('title','Feedback')

@section('body')
@if (Cookie::get('background')!== null)
<body id="{{Cookie::get('background')}}">
@else
<body id="backgrounddefault">
@endif

@section('content')
{{session('registration_message')}}
<form class="box" action="/sendFeedback" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

  <h1>Give Feedback</h1>
  <input type="text" name="u_category" placeholder="Enter category" value="{{old('u_category')}}" require autofocus>
  <h3>@if ($errors->has('u_category'))
                {{ $errors->first('u_category') }}
                @endif</h3>

  
  <textarea  name="u_feedback" rows="4" cols="25" placeholder="Enter your feedback" require>{{old('u_feedback')}}</textarea>
                
  <h3>@if ($errors->has('u_feedback'))
                {{ $errors->first('u_feedback') }}
                @endif</h3>

                
  <input type="submit" name="" value="Send Feedback">
</form>

       
@endsection