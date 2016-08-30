<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Prueba\Http\Requests;
use Prueba\Http\Requests\loginrequest;


class logcontroller extends Controller
{
    public function store(loginrequest $request)
    {

        if (Auth::attempt(['name'=> $request['name'], 'password'=>$request['password']])){
            return Redirect::to ('admin');

        }

        Session::flash('message-error','Datos Incorrectos');
        return Redirect::to('/');


    }
}
