@extends('layouts.app')
@section('content')

<div class="container">
	
	<h2 class="center">Usuários</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper green-text" >
      <div class="col s12">
        <a href="{{route('admin.inicio')}}" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Usuários</a>
        
      </div>
    </div>
  </nav>
  </div>
	
	<div class="row" >
	<table class="highlight centered">
		<thead>
		<tr >
			<th>Nome</th>
			<th>E-mail</th>
			<th>Cidade</th>
			<th>Telefone</th>

		</tr>
		</thead>
	
	<tbody>
		@foreach ($usuarios as $usuario)
		<tr>
			<td>{{$usuario->name}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->cidade}}</td>
			<td>{{$usuario->telefone}}</td>
			<td>			
			<a class="btn green" href="{{route('admin.usuarios.editar',$usuario->id)}}" > <i class="material-icons">mode_edit </i></a>

			<a class="btn red"  href="javascript: if(confirm('Vai deletar mesmo!?')){window.location.href = '{{route('admin.delet',$usuario->id)}}'}"> <i class="material-icons">delete </i></a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>
<div class="row">
	<a class ='btn blue '  class="center " href="{{route('admin.usuarios.add')}}"><i class="material-icons ">perm_identity </i> Novo </a>
</div>
</div>

</div>

@endsection