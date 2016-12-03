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
    public function show()
    {
        $atletas = estudiantes::all();
        return view('atleta.buscar',compact('atletas'));

    }
    public function edit($id)
    {
        $atletas=estudiante_representantes::find($id);
        $atleta=estudiantes::find($id);

        return view('atleta.edit', ['atleta'=>$atleta],['atletas'=>$atletas]);


    }
    public function update(Request $request, $id)
    {
        $atleta=estudiantes::find($id);
        $atleta->fill($request->all());
        $atleta->save();

        $atletas=estudiante_representantes::find($id);
        $atletas->fill($request->all());
        $atletas->save();

        return Redirect::to('/atleta');
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

    public function btc()
    {

            function getprice($url){
                $decode=file_get_contents($url);
                return json_decode($decode,true);
            }
            $btcUSD=getprice('https://btc-e.com/api/2/btc_usd/ticker');
            $btcprice=$btcUSD["ticker"]["last"];


        return $btcprice;


    }
}