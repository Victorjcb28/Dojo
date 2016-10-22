<?php

namespace Dojo\Http\Controllers;

use Illuminate\Http\Request;

use Dojo\Http\Requests;
use Dojo\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;

class LogController extends Controller
{
    public function store(loginrequest $request)
    {

        if (Auth::attempt(['name'=> $request['name'], 'password'=>$request['password']])){
            return Redirect::to('admin');

        }
        //Session::flash('message-error','Datos Incorrectos');
        //return Redirect::to('/');



    }
}