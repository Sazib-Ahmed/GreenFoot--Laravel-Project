<?php

namespace App\Http\Controllers;
use App\Models\Feedbacks;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    //
    function getFeedback()
    {

        $feedback_data=Feedbacks::all();

        return view('UserFeedback',['feedbacks'=>$feedback_data]);
    }

    function getSendFeedback(Request $request)
    {
        $this->validate($request,
        [
            'f_title'=>"required|string|max:100",
            'f_feedback'=>'required|string|max:1000',

        ],
        [
            'f_title.required'=>'Please enter Feedback Title',
            'f_title.string'=>'Feedback Title must be a string, Please enter a valid Title',
            'f_title.max'=>'Please enter a Title under 1000 characters',

            'f_feedback.required'=>'Please enter the Feedback',
            'f_feedback.string'=>'Feedback must be a string, Please enter a valid Title',
            'f_feedback.max'=>'Please enter a Feedback under 1000 characters',
        ]);


    if(isset($error))
    {
        $feedbackerrors='Oops, Something went wrong.';
        return back()->with([ 'feedbackerrors' => $feedbackerrors ]);
    }
    else
    {

        $feedback=new Feedbacks();
        $feedback->f_title=$request->f_title;
        $feedback->u_id=session()->get('u_id');
        $feedback->f_feedback=$request->f_feedback;
        $feedback->f_response='No response yet.';


        $feedback->save();
        return back()->with('feedback_message','Feedback Successfully Send');
    }
        
    }
}
