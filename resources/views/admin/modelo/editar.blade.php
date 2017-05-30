@extends('layouts.app')
@section('content')
<div class="container">
	
	<h2 class="center">Editar Modelos</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper " >
      <div class="col s12">
        <a href="{{route('admin.inicio')}}" class="breadcrumb">Inicio</a>
       
       <a class="breadcrumb">Editar Modelos</a>
        
      </div>
    </div>
  </nav>
  </div>
  <div class="row">
  	<form action="{{route('admin.modelo.atualizar',$registro->id)}}" method="post">
  	{{csrf_field()}}
    <input type="hidden" name="_method" value="put">
  	@include('admin.modelo._form')
  	<button class="btn blue ">Editar</button>
  	</form>
  </div>
  </div>
  	



@endsection