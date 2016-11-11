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
        /*$atletas= estudiante_representantes::
        select('estudiantes.name','estudiante_representantes.name1')
            ->join('estudiantes','estudiantes.id','=','estudiante_representantes.estudiante_id')
            ->get();*/
        $atletas = DB::table('estudiantes')
            ->join('estudiante_representantes', 'estudiantes.id', '=', 'estudiante_representantes.estudiante_id')

            ->select('estudiantes.name', 'estudiante_representantes.name1')
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
