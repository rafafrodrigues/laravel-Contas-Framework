@extends('principal')
@section('title', 'Lista Contas Receber')

@section('content')
<script type="text/javascript">
   function apagar(url) {
   	 if (window.confirm('Deseja realmente apagar?')) {
       window.location = url;
   	 }
   }	
</script>

<h1 class="text-center text-secondary mb-3">Lista de Contas a Receber</h1>

<!-- mensagem na view da informação da conta cadastrada com sucesso -->
@if(old('insert'))
   <div class="alert alert-success">
   	  {{old('descricao_rec')}} cadastrado(a) com sucesso!
   </div>
@endif

@if(old('update'))
   <div class="alert alert-success">
   	  {{old('descricao_rec')}} alterado(a) com sucesso!
   </div>
@endif

<table class="table table-hover text-center">
	
	<thead>
		<tr>
			<th>ID</th>
			<th>Descrição</th>
			<th>Cliente</th>
			<th>Valor</th>
			<th>Ação</th>
		</tr>
	</thead>
	@foreach ($contas_receber as $r)
	<tbody>
    <tr>
		<td>{{$r->id}}</td>
		<td>{{$r->descricao_rec}}</td>
		<td>{{$r->cliente}}</td>
		<td>{{$r->valor_rec}}</td>
		<td><a href="{{ action('ContasReceberController@editarReceber', $r->id) }}" class="btn btn-outline-info btn-sm">Editar</a>
		<a href="#" class="btn btn-outline-danger btn-sm ml-2 mr-2 my-1" onclick="apagar('{{action("ContasReceberController@deletarReceber", $r->id)}}')";>Excluir</a></td>
	</tr>
    </tbody>
    @endforeach		
</table>	 

<a href="{{ action('ContasReceberController@cadastroReceber') }}" class="btn btn-outline-info btn-md mr-4">Cadastrar Conta Receber</a>

<a href="{{ action('ContasReceberController@listaDataCadReceber') }}" class="btn btn-outline-info btn-md">Data cadastro</a>
@stop