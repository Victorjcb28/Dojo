<?php

namespace Dojo\Http\Controllers;

use Dojo\estudiante_representantes;
use Dojo\estudiantes;
use Illuminate\Http\Request;
use Dojo\User;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $atletas= estudiantes::
        select('estudiantes.name','medallas.oro','medallas.plata','medallas.bronce')
            ->join('medallas','estudiantes.id','=','medallas.estudiante_id')
            ->get();

        return view('pdf.index',['atletas'=>$atletas]);
    }
    public function show($id)
    {
        //
    }
    public function invoice()
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }

    public function getData()
    {
        $data =  [
            'quantity'      => 'name' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }



}
