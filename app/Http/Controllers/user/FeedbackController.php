<?php

namespace App\Http\Controllers\user;

use App\Advice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $feedbacks = Advice::All();


        return view('user/feedback',compact('feedbacks'));
    }
}
