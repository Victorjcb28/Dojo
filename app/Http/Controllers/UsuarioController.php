<?php
namespace Dojo\Http\Controllers;
use Illuminate\Http\Request;
use Dojo\Http\Requests;
use Dojo\Http\Controllers\Controller;
use Dojo\User;
use Session;
use Redirect;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usuario.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public  function  store(Request $request)
    {
        #User::create([
        #'name'=>$request['name'],
        #'password' => bcrypt($request['password']),
        #]);

        $user = new User;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();

        return Redirect::to('/usuario');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users= User::all();
        $pdf = \PDF::loadView('usuario.pdf',['users'=>$users]);
        return $pdf->download('pruebapdf.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('usuario.edit', ['user'=>$user]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();

        return Redirect::to('/usuario');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return Redirect::to('/usuario');
    }

    /*public function pdf()
    {
        $users= User::all();
        $pdf = \PDF::loadView('usuario.pdf',['users'=>$users]);
        return $pdf->download('pruebapdf.pdf');
    }*/
}