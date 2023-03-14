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


<form action="/user/carbonfootprintofelectricity/calculate" class='box' method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <h1>Electricity Footprint Calculation</h1>
  <h3> {{session()->get('electricityerrors')}}</h3>

  <select name='ef_division' placeholder='Select your division' autofocus >
               <option value=''>Select your Division</option>
               <option value='Barishal'>Barishal</option>
               <option value='Chattogram'>Chattogram</option>
               <option value='Dhaka'>Dhaka</option>
               <option value='Khulna'>Khulna</option>
               <option value='Mymensingh'>Mymensingh</option>
               <option value='Rajshahi'>Rajshahi</option>
               <option value='Rangpur'>Rangpur</option>
               <option value='Sylhet'>Sylhet</option>
            </select>
            <h3>@if ($errors->has('ef_division'))
                {{ $errors->first('ef_division') }}
                @endif</h3>
  
  <input type="text" name="ef_usages" placeholder="Unit of electricity used" value="{{old('ef_usages')}}" require autofocus>
  <h3>@if ($errors->has('ef_usages'))
                {{ $errors->first('ef_usages') }}
                @endif</h3>


  <input type="submit" value="Calculate"><br>
</form>
       
@endsection