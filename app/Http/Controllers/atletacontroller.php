<?php

namespace Prueba\Http\Controllers;
use Prueba\Http\Requests;
use Prueba\User;
use Prueba\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;

class atletacontroller extends Controller
{
    public function index()

    {
        return "listo";

    }

    public function create()
    {
        return view('atletas.create');
    }

    public function  store(){

        $estudiantes = Prueba\estudiante_representantes::find(1);

        $comment = $post->comments()->create([
            'message' => 'A new comment.',
        ]);
    }
}