<?php

namespace App\Http\Controllers\admin;

use App\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $answers = Answer::All();
        return view('admin.posts.index',compact('answers'));
    }


    public function create()
    {
        return view('admin/posts/create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
