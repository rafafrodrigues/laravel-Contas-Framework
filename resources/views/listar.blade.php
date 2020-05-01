@extends('principal')
@section('title', 'Listar Contas')

@section('content')
<script type="text/javascript">
   function apagar(url) {
   	 if (window.confirm('Deseja realmente apagar?')) {
       window.location = url;
   	 }
   }	
</script>

<h1 class="text-center text-secondary mb-3">Lista de Contas a Pagar</h1>

<!-- mensagem na view da informação da conta cadastrada com sucesso -->
@if(old('insert'))
   <div class="alert alert-success">
   	  {{old('descricao')}} cadastrado(a) com sucesso!
   </div>
@endif

@if(old('update'))
   <div class="alert alert-success">
   	  {{old('descricao')}} alterado(a) com sucesso!
   </div>
@endif

<table class="table table-hover text-center">
	<thead>
		<tr>
			<th>ID</th>
			<th>Descrição</th>
			<th>Valor</th>
			<th>Ação</th>
		</tr>
	</thead>
	@foreach ($contas_pagar as $c)
    <tr>
		<td>{{$c->id}}</td>
		<td>{{$c->descricao}}</td>
		<td>{{$c->valor}}</td>
		<td><a href="{{ action('ContasPagarController@editar', $c->id) }}" class="btn btn-outline-info btn-small">Editar</a>
		<!-- <td><a href="{{ action('ContasPagarController@deletar', $c->id) }}" class="btn btn-outline-danger btn-small">Excluir</a></td> -->
		<a href="#" class="btn btn-outline-danger btn-small ml-3" onclick="apagar('{{action("ContasPagarController@deletar", $c->id)}}')";>Excluir</a></td>
	</tr>

    @endforeach		
</table>	 

<a href="{{ action('ContasPagarController@cadastro') }}" class="btn btn-outline-info btn-small mb-3">Cadastrar Conta</a>
@stop 