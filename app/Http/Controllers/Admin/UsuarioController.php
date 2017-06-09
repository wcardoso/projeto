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
	{//pegar todos os usuários e mostar
		$usuarios = User::all();
			return view('admin.usuarios.index',compact('usuarios'));
	}

	public function add()
	{
	return view('admin.usuarios.add');
	}

	
	public function save(Request $request)
	{//Salvar novo usuários
		$dados = $request->all();
		$usuario = new User();
		$usuario->name = $dados['name'];
		$usuario->email= $dados['email'];
		$usuario->password = bcrypt($dados['password']);
		$usuario->cidade = $dados['cidade'];
		$usuario->telefone = $dados['telefone'];
		$usuario->save();

		\Session::flash('msg',['msg'=>"Usuário Criado Com Sucesso.",'class'=>'green white-text']);

		return redirect()->route('admin.usuarios');

	}
	public function editar($id)
	{//Pesquisar usuário pelo id e depois chamar a view de ediçaõ
 		$usuario = User::find($id);
 		return view('admin.usuarios.editar', compact('usuario'));

	}
	public function atualizar(Request $request, $id)
	{
		$usuario = User::find($id);
		$dados = $request->all();
		//ISSET Verifica se a variável é definida.
		//Verificar tamnho da string password


		if (isset($dados['password']) && strlen($dados['password']) > 5) {
			# code...
		}else{
			//Caso não, será destruida com Unset
			unset($dados['password']);
	
		}
		$usuario->update($dados);

		\Session::flash('msg',['msg'=>"Usuário Alterado Com Sucesso.",'class'=>'green white-text']);

		return redirect()->route('admin.usuarios');
	}

	public function deletar($id){
		User::find($id)->delete();
		return redirect()->route('admin.usuarios');
		\Session::flash('msg',['msg'=>"Usuário Deletado Com Sucesso.",'class'=>'green white-text']);
	}


}
