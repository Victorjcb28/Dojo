<?php

namespace Dojo\Http\Controllers;

use Illuminate\Http\Request;

use Dojo\Http\Requests;
use Session;
use Redirect;
use Dojo\estudiantes;
use Dojo\estudiante_representantes;
use Dojo\Http\Controllers\Controller;

class AtletaController extends Controller
{
    public function index()

    {
        return "listo";

    }

    public function create()
    {
        return view('atleta.create');
    }

    public function  store(Request $request){

        $estudiantes=new estudiantes;
        $estudiantes->name= $request->name;
        $estudiantes->save();

        $estudiante_representantes=new estudiante_representantes;
        $estudiante_representantes->estudiante_id=$estudiantes->id;
        $estudiante_representantes->name= $request->name;//Recordar cambiar el name al nombre del representante
        $estudiante_representantes->save();
    }
}