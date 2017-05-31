<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'site.home', function () {
	return view ('site.home');
}]);

Route::get('/contato', ['as'=>'site.contato', function () {
	return view ('site.contato');
}]);

Route::get('/BuscaCep', ['as'=>'site.cep', function () {
	return view ('site.cep');
}]);



////////
Route::get('/admin/login',['as'=>'admin.login',function(){
	return view ('admin.login.index');
}]);

Route::post('/admin/login',['as'=>'admin.login','uses'=>'Admin\UsuarioController@login']);

Route::get('/admin/usuarios/pdf',['as'=>'admin.pdf','uses'=>'Admin\PdfController@pdf']);








Route::group(['middleware'=>'auth'],function(){

	Route::get('/admin',['as'=>'admin.inicio',function(){
	return view ('admin.inicio.index');
}]);


	Route::get('/admin/usuarios',['as'=>'admin.usuarios','uses'=>'Admin\UsuarioController@index']);

	Route::get('/admin/usuarios/add',['as'=>'admin.usuarios.add','uses'=>'Admin\UsuarioController@add']);

	Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar','uses'=>'Admin\UsuarioController@editar']);

	Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar','uses'=>'Admin\UsuarioController@atualizar']);
		
	Route::post('/admin/usuarios/save',
		['as'=>'admin.usuarios.save','uses'=>'Admin\UsuarioController@save']);
		

	Route::get('/admin/usuarios/deletar/{id}', ['as'=>'admin.delet','uses'=>'Admin\UsuarioController@deletar']);

//Rotas para Modelo------
	Route::get('/admin/modelo',['as'=>'admin.modelo','uses'=>'Admin\ModeloController@index']);

	Route::get('/admin/modelo/add',['as'=>'admin.modelo.add','uses'=>'Admin\ModeloController@add']);

	Route::get('/admin/modelo/editar/{id}',['as'=>'admin.modelo.editar','uses'=>'Admin\ModeloController@editar']);

	Route::put('/admin/modelo/atualizar/{id}',['as'=>'admin.modelo.atualizar','uses'=>'Admin\ModeloController@atualizar']);
		
	Route::post('/admin/modelo/save',
		['as'=>'admin.modelo.save','uses'=>'Admin\ModeloController@save']);
		

	Route::get('/admin/modelo/deletar/{id}', ['as'=>'admin.modelo.delet','uses'=>'Admin\ModeloController@deletar']);


});