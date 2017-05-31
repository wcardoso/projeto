<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
}

th, td {
    padding: 5px;
    text-align: left;
}
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color:#fff;
}
table th {
    background-color: black;
    color: white;
}
</style>

<style type="text/css">
  .wrapper{
  	margin: 0 auto;
  	width: 75%;
  	margin-top: 10px;
  }
  </style>
</head>


	<div class="wrapper" >
		<section class="panel panel-primary">
			<div class="panel-heading">
				<h1 align="center" >Relatório de Usuários</h1>
				<br>
			</div>
			
	
	<table>
		<thead>
		<tr >
			<th>Nome</th>
			<th>E-mail</th>
			<th>Cidade</th>
			<th>Telefone</th>

		</tr>
		</thead>
	
	<tbody>
		@foreach ($usuario as $usuario)
		<tr>
			<td>{{$usuario->name}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->cidade}}</td>
			<td>{{$usuario->telefone}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>

</div>
</section>
</div>
</html>
	


	


    
   




















