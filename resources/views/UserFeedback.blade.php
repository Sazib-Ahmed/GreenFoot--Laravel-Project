@extends('layouts.UserHome')
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
  
  <h3> {{session()->get('feedback_message')}}</h3>


  <input type="text" name="f_title" placeholder="Enter title" value="{{old('f_title')}}" require autofocus>
  <h3>@if ($errors->has('f_title'))
                {{ $errors->first('f_title') }}
                @endif</h3>

  
  <textarea type="text"  name="f_feedback" rows="10" cols="25" placeholder="Enter feedback" require>{{old('f_feedback')}}</textarea>
                
  <h3>@if ($errors->has('f_feedback'))
                {{ $errors->first('f_feedback') }}
                @endif</h3>

                
  <input type="submit" name="" value="Send Feedback">
  


</form>

<br><br><br>
<br>
<br>
@foreach($feedbacks as $feedback)

@if($feedback['u_id']==Session()->get('u_id'))
<form class="feedbox">
<h1>Previous Feedback on: </h1> 
{{$feedback['created_at']}} <br><br><br><br>
<h1>Feedback Title:</h1> 
{{$feedback['f_title']}}<br><br><br><br>
<h1>Feedback:</h1>
{{$feedback['f_feedback']}}<br><br><br>
<br>
<h1>Feedback Response:</h1>
{{$feedback['f_response']}}
</form>
@endif
@endforeach



       
@endsection