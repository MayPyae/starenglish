<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Teacher;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::All();
        return view('admin.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::All();

        $teachers = Teacher::All();
        return view('admin.teachers.create',compact('courses'));
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
         if($request->hasFile('profile'))
        {
            $photo =$request->file('profile');
            $filename=time().','.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);

            $profile ='/storage/profile/'.$filename;
          }
            $teacher = new Teacher;
            $teacher->name = request('name');
            $teacher->email = request('email');
            $teacher->phone = request('phone');
            $teacher->degree = request('degree');
            $teacher->course = request('course');
            $teacher->address = request('address');
            $teacher->activity = request('activity');
            $teacher->profile = $profile;
            $teacher->save();

         return redirect()->route('user.teacher');
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
        $teacher = Teacher::find($id);
        return view('admin.teachers.edit',compact('teacher','courses'));
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
            $teacher = new Teacher;
            $teacher->name = request('name');
            $teacher->email = request('email');
            $teacher->phone = request('phone');
            $teacher->degree = request('degree');
            $teacher->course = request('course');
            $teacher->address = request('address');
            $teacher->activity = request('activity');
            $teacher->profile = $profile;
            $teacher->save();

         return redirect()->route('user.teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index');
    }
}
