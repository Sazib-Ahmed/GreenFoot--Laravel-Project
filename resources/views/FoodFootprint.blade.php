@extends('layouts.UserHome')
@section('title')
User Home
@endsection

@section('body')
@if (Cookie::get('background')!== null)
<body id="{{Cookie::get('background')}}">
@else
<body id="backgrounddefault">
@endif

@section('content')


<form action="/user/carbonfootprint" class='box' method="GET" enctype="multipart/form-data">
            {{csrf_field()}}

            <h1>This Webpage is Under Construction</h1>
            <img src="{{asset('/storage/ProfilePictures/underconstruction.gif')}}" class="constructionavatar">

            <input type="submit" name="" value="Go Back">


</form>
       
@endsection