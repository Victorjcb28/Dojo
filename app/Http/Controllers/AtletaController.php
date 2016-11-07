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
    public function index(Request $request)

    {
        $atletas = estudiantes::all()->take(10);
        //$atletas = estudiantes::name($request->get('name'))->paginate();
        return view('atleta.index',compact('atletas'));

    }

    public function create()
    {
        return view('atleta.create');
    }

    public function  store(Request $request){

        $estudiantes=new estudiantes;
        $estudiantes->name= $request->name;
        $estudiantes->apellido= $request->apellido;
        $estudiantes->cedula= $request->cedula;
        $estudiantes->direccion= $request->direccion;
        $estudiantes->kyu= $request->kyu;
        $estudiantes->save();

        $estudiante_representantes=new estudiante_representantes;
        $estudiante_representantes->estudiante_id=$estudiantes->id;
        $estudiante_representantes->name1= $request->name1;
        $estudiante_representantes->apellido1= $request->apellido1;
        $estudiante_representantes->cedula1= $request->cedula1;
        $estudiante_representantes->direccion1= $request->direccion1;
        $estudiante_representantes->save();
    }
    public function pdf()
    {


        $users= estudiantes::all();
        $pdf = \PDF::loadView('usuario.pdf',['users'=>$users]);
        return $pdf->download('pruebapdf.pdf');
    }
}