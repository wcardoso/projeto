<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelo;

//Classe para realizar crud
class ModeloController extends Controller
{
    public function index()
	{
		$registros = Modelo::all();
		//Traz apenas os registros
			return view('admin.modelo.index',compact('registros'));
	}

	public function add()
	{
	return view('admin.modelo.add');
	}

	//realizar requisção, para salvar o titulo do modelo
	public function save(Request $request)
	{
		$dados = $request->all();
		$registro = new modelo();
		$registro->titulo = $dados['titulo'];		
		$registro->save();

		\Session::flash('msg',['msg'=>"Modelo Criado Com Sucesso.",'class'=>'green white-text']);
		//retornar para rota

		return redirect()->route('admin.modelo');

	}

	public function editar($id)
	{
 		$registro = Modelo::find($id);
 		return view('admin.modelo.editar', compact('registro'));

	}


	public function atualizar(Request $request, $id)
	{
		$registro = Modelo::find($id);
		$dados = $request->all();
		$registro->titulo = $dados['titulo'];
		$registro->update();
		
		\Session::flash('msg',['msg'=>"Modelo Alterado Com Sucesso.",'class'=>'green white-text']);

		return redirect()->route('admin.modelo');
	}

	public function deletar($id){
		Modelo::find($id)->delete();
		\Session::flash('msg',['msg'=>"Modelo Deletado Com Sucesso.",'class'=>'green white-text']);
		return redirect()->route('admin.modelo');
		
	}
}
