<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UsuarioController extends Controller
{
	public function login (Request $request){
		$dados = $request->all();
		//Verificar se existe o login e senha e é criada
		//uma seção, nesse caso o usuário é redirecionado
		//para outra página.
		if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){

			return redirect()->route('admin.inicio');

		}

		\Session::flash('msg',['msg'=>"Login ou Senha Inválidos",'class'=>'red white-text']);

		return redirect()->route('admin.login');

	}

	public function index()
	{
		$usuarios = User::all();
			return view('admin.usuarios.index',compact('usuarios'));
	}

}
