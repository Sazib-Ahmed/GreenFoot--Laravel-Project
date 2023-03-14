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


<form action="/user/carbonfootprintofelectricity" class='footprint' method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="backgrounddefault" type="submit" value="Electricity"><br>
</form>

  <form action="/user/carbonfootprintoftravel" class='footprint' method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="background1" type="submit" value="Travel"><br>
</form>
<form action="/user/carbonfootprintoffood" class='footprint' method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input name="background2" type="submit" value="Food"><br>
</form>
<form action="/user/carbonfootprintofhousehold" class='footprint' method="GET" enctype="multipart/form-data">
            {{csrf_field()}}
  <input class='submit' name="background3" type="submit" value="Household"><br>
</form>


       
@endsection