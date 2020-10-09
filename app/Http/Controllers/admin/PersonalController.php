<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personals = Personal::All();
        return view('admin.personals.show',compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personals = Personal::All();
        return view('admin.personals.create');
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

           if($request->hasFile('cv'))
        {
            $photo =$request->file('cv');
            $filename=time().','.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/cv/',$filename);

            $cv ='/storage/cv/'.$filename;
          }
            $personal = new Personal;
            $personal->name = request('name');
            $personal->email = request('email');
            $personal->phone = request('phone');
            $personal->address = request('address');
            $personal->profile = request('profile');
            $personal->cv = request('cv');
            $personal->profile = $profile;
            $personal->cv = $cv;
            $personal->save();

         return redirect()->route('admin.personal.create',$personal->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::where('id',$id)->first();
        return view('admin/personal/show',compact('personal'));
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
         $personal = Personal::find($id);
        $personal->delete();

        return redirect()->route('admin.personal.index');
    }
}
