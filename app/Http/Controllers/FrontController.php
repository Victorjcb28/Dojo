<?php

namespace Dojo\Http\Controllers;

use Illuminate\Http\Request;

use Dojo\Http\Requests;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function admin(){
        return view('admin.index');
    }
}
