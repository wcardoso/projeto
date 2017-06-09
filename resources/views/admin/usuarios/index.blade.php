@extends('layouts.app')
@section('content')
<!--Index dos usuário-->

<div class="container">
	
	<h2 class="center">Usuários</h2>	


	
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
	<!--para cada usuários ele mostrará um usuário-->
		@foreach ($usuarios as $usuario)
		<tr>
			<td>{{$usuario->name}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->cidade}}</td>
			<td>{{$usuario->telefone}}</td>
			<td>			
			<a class="btn green" href="{{route('admin.usuarios.editar',$usuario->id)}}" > <i class="material-icons">mode_edit </i></a>
			<!--Mostrar tela de confirmação de exclusão de usuário-->

			<a class="btn red"  href="javascript: if(confirm('Vai deletar mesmo!?')){window.location.href = '{{route('admin.delet',$usuario->id)}}'}"> <i class="material-icons">delete </i></a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>

<div class="row">
	<a class ='waves-effect waves-light btn blue '  class="center " href="{{route('admin.usuarios.add')}}"><i class="material-icons ">perm_identity </i> Novo </a>

</div>
<div class="row" >
	<a class ='waves-effect waves-light btn'   href="{{route('admin.pdf')}}"><i class="material-icons">description</i> Relatório </a>
	
</div>
</div>

</div>

@endsection