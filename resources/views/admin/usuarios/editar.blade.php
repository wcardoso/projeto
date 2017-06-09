@extends('layouts.app')
@section('content')
<div class="container">
<!--Editar usuário-->
	
	<h2 class="center">Editar Usuário</h2>	

	
  <div class="row">
  <!--Pegar dados através do método post-->
  	<form action="{{route('admin.usuarios.atualizar',$usuario->id)}}" method="post">
  	{{csrf_field()}}
    <!--Alterar para put para colocar os dados-->
    <input type="hidden" name="_method" value="put">
  	@include('admin.usuarios._form')
  	<button class="btn blue ">Editar</button>
  	</form>
  </div>
  </div>
  	



@endsection