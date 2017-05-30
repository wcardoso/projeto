@extends('layouts.app')
@section('content')
<div class="container">
	
	<h2 class="center">Adcionar Usuário</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper " >
      <div class="col s12">
        <a href="{{route('admin.inicio')}}" class="breadcrumb">Inicio</a>
       <a href="{{route('admin.usuarios')}}" class="breadcrumb">Usuários</a>
       <a class="breadcrumb">Novo Usuário</a>
        
      </div>
    </div>
  </nav>
  </div>
  <div class="row">
  	<form action="{{route('admin.usuarios.save')}}" method="post">
  	{{csrf_field()}}
  	@include('admin.usuarios._form')
  	<button class="btn blue ">Adicionar</button>
  	</form>
  </div>
  </div>
  	



@endsection