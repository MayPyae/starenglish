<?php

namespace App\Http\Controllers\admin;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $students = Student::All();
        return view('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::All();

        $students = Student::All();
        return view('admin.students.create',compact('courses'));
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
            $student = new Student();
            $student->name = request('name');
            $student->email = request('email');
            $student->phone = request('phone');
            $student->degree = request('degree');
            $student->course = request('course');
            $student->address = request('address');

            $student->profile = $profile;
            $student->save();

         return redirect()->route('admin.student.create');
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
        $courses = Course::all();
        $student = Student::find($id);
        return view('admin.students.edit',compact('student','courses'));
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

        if($request->hasFile('profile'))
        {
            $photo =$request->file('profile');
            $filename=time().','.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);

            $profile ='/storage/profile/'.$filename;
          }
            $student = new Student();
            $student->name = request('name');
            $student->email = request('email');
            $student->phone = request('phone');
            $student->degree = request('degree');
            $student->course = request('course');
            $student->address = request('address');

            $student->profile = $profile;
            $student->save();
            return redirect()->route('admin.student.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('admin.student.index');
    }
}
