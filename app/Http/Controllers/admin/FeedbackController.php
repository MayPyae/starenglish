<?php

namespace App\Http\Controllers\admin;

use App\Advice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Advice::All();
        return view('admin.feedbacks.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $feedbacks = Advice::All();
        return view('user.feedback',compact('feedbacks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->hasFile('profile'))
        {
            $photo =$request->file('profile');
            $filename=time().','.$photo->getClientOriginalExtension();
             $photo->move(public_path().'/storage/profile/',$filename);

            $profile ='/storage/profile/'.$filename;
          }
        $feedback = new Advice();
                $feedback->name = request('name');

                $feedback->message = request('message');
                $feedback->profile = $profile;
                $feedback->save();

         return redirect()->route('user.feedback');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $feedback = Advice::find($id);
        $feedback->delete();

        return redirect()->route('admin.feedback.index');
    }
}
