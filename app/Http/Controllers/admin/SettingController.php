<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    
    public function __invoke(Request $request)
    {
        return view('admin/setting');
    }
}
