@extends('layouts.app')
@section('content')
<div class="container">
	
	<h2 class="center">Adcionar Usuário</h2>	

	  <div class="row">
  	<form action="{{route('admin.usuarios.save')}}" method="post">
  	{{csrf_field()}}
  	@include('admin.usuarios._form')
  	<button class="btn blue ">Adicionar</button>
  	</form>
  </div>
  </div>
  	



@endsection