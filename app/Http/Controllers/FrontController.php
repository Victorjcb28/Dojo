<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;

use Prueba\Http\Requests;

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



