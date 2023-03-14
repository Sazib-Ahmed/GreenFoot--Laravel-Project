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

@foreach($guides as $guide)

<form class="footprint ">
<h1>Guide Category: </h1> 
{{$guide['name']}} <br><br><br><br>
<h1>Title:</h1> 
{{$guide['title']}}<br><br><br><br>
<h1>Details:</h1>
{{$guide['details']}}<br><br><br>
</form>

@endforeach
       
@endsection