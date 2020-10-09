<?php

namespace App\Http\Controllers\admin;

use App\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($question)
    {
        $answers = Answer::All();
        $questions = Question::All();

       return view('admin.questions.index',compact('questions','answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($question)
    {
          $answers = Answer::All();
         $questions = Question::All();
        return view('admin.questions.create',compact('answers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //dd($request);
          $answer = new Answer();
                $answer->description = request('description');
                $answer->save();



        return redirect(route('admin.question.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $answers = Answer::All();
         $answer = Answer::find($id);
        return view('admin.answers.show',compact('answer','answers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $answer = Answer::find($id);
        $answer->delete();

        return redirect()->route('admin.posts.index');
    }
}
