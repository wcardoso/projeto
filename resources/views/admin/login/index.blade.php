  <!--Página Login admin-->
@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Acessar</h2>
	
	<!--Acessar metodo da rota-->
	<form action="{{route('admin.login')}}" method="post">
			<!--Token Laravel, metodo de validação-->
			{{csrf_field()}}
			@include('admin.login._formu')
		<button class="btn blue ">Entrar</button>
	
	
	</form>
</div>

@endsection