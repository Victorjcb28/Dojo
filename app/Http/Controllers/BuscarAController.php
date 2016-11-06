<?php

namespace Dojo\Http\Controllers;

use Illuminate\Http\Request;

use Dojo\Http\Requests;
use Session;
use Redirect;
use Dojo\estudiantes;
use Dojo\estudiante_representantes;
use Dojo\Http\Controllers\Controller;

class BuscarAController extends Controller
{
    public function index(Request $request)

    {

        $atletas = estudiantes::name($request->get('name'))->paginate();
        return view('atleta.buscar',compact('atletas'));

    }
}
