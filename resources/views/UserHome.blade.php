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

<h1>Home</h>
       
@endsection