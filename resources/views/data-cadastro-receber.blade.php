@extends('principal')
@section('title', 'Data cadastro Contas Receber')

@section('content')
<h2 class="text-center text-secondary mb-3">Data cadastro Contas a Receber</h2>

<table class="table table-hover text-center">
	<thead>
		<tr>
			<th>ID</th>
			<th>Descrição</th>
			<th>Cliente</th>
			<th>Data Cadastro</th>
		</tr>
	</thead>
    @foreach ($contas_receber as $cad)
	<tbody>
	  <tr>
		<td>{{$cad->id}}</td>
		<td>{{$cad->descricao_rec}}</td>
		<td>{{$cad->cliente}}</td>
		<td>{{$cad->created_at}}</td>		
	  </tr>
	</tbody>
	@endforeach			
</table>
@stop