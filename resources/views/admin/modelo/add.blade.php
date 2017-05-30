@extends('layouts.app')
@section('content')
<div class="container">
	
	<h2 class="center">Adcionar Modelo</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper " >
      <div class="col s12">
        <a href="{{route('admin.inicio')}}" class="breadcrumb">Inicio</a>
       <a href="{{route('admin.modelo')}}" class="breadcrumb">Modelo</a>
       <a class="breadcrumb">Novo Modelo</a>
        
      </div>
    </div>
  </nav>
  </div>
  <div class="row">
  	<form action="{{route('admin.modelo.save')}}" method="post">
  	{{csrf_field()}}
  	@include('admin.modelo._form')
  	<button class="btn blue ">Adicionar</button>
  	</form>
  </div>
  </div>
  	



@endsection