<?php

namespace Dojo\Http\Controllers;

use Illuminate\Http\Request;
use Dojo\User;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.index');
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
