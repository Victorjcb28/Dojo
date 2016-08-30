<?php
namespace Prueba\Http\Controllers;


use Prueba\Http\Requests;
use Prueba\User;
use Prueba\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;


class UsuarioController extends Controller {
    //

    public  function  index()

    {
        $users = User::all();
        return view('usuario.index',compact('users'));

    }
    public  function  create()
    {
        return view ('usuario.create');
    }

    public  function  store(Request $request)
    {
        #User::create([
            #'name'=>$request['name'],
            #'password' => bcrypt($request['password']),
        #]);

        $user=new User;
        $user->name=$request->name;
        $user->password=$request->password;
        $user->save();

        return Redirect::to('/usuario');
    }

    public function  edit($id)

    {
        $user=User::find($id);
        return view('usuario.edit', ['user'=>$user]);
    }

    public function update($id, Request $request)

    {
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();

        return Redirect::to('/usuario');

    }
    public function destroy($id){
        User::destroy($id);
        return Redirect::to('/usuario');
    }

}
