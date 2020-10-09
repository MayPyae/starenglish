<?php

namespace App\Http\Controllers\admin;

use App\Answer;
use App\Choose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Question;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $chooses = Choose::All();
        $answers = Answer::All();
       $questions = Question::All();

       return view('admin.questions.index',compact('questions','answers','chooses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $answers = Answer::All();
        $chooses = Choose::All();
        $questions = Question::All();
        return view('admin.questions.create',compact('answers','chooses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $question = new Question();
                $question->description = request('description');
                $question->save();

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
        $questions = Question::All();
         $question = Question::find($id);
        return view('admin.questions.show',compact('question','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $question = Question::find($id);
        return view('admin.categories.edit',compact('question'));
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
         $question = new Question();
                $question->description = request('description');
                $question->save();

        return redirect(route('admin.question.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $question = Question::find($id);
        $question->delete();

        return redirect()->route('admin.question.index');
    }
}
