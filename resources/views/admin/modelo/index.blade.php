<!--Modelo-->

@extends('layouts.app')
@section('content')

<div class="container">
	
	<h2 class="center">Modelo</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper green-text" >
      <div class="col s12">
        <a href="{{route('admin.inicio')}}" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Modelo</a>
        
      </div>
    </div>
  </nav>
  </div>
	
	<div class="row" >
	<table class="highlight centered">
		<thead>
		<tr>

			<th>Id</th>
			<th>Titulo</th>
			
			

		</tr>
		</thead>
	
	<tbody>
		@foreach ($registros as $registro)
		<tr>
			<td>{{$registro->id}}</td>		
			<td>{{$registro->titulo}}</td>			
			
			
			<td>			
			<a class="btn green" href="{{route('admin.modelo.editar',$registro->id)}}" > <i class="material-icons">mode_edit </i></a>

			<a class="btn red"  href="javascript: if(confirm('Vai deletar mesmo!?')){window.location.href = '{{route('admin.modelo.delet',$registro->id)}}'}"> <i class="material-icons">delete </i></a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>
<div class="row">
	<a class ='btn blue '  class="center " href="{{route('admin.modelo.add')}}"><i class="material-icons ">library_books </i> Novo </a>
</div>
</div>

</div>

@endsection