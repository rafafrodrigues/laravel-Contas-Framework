@extends('principal')
@section('title', 'Editar Contas')

@section('content')
<h1 class="mt-5 mb-3">Editar Contas - {{ $contas_pagar->id }}</h1>
<form action="{{ action('ContasPagarController@update', $contas_pagar->id)}}" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

    <!-- campo para especificar mensagem da operação na view após editar uma conta -->
	<input type="hidden" name="update" value="update">

	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{ $contas_pagar->descricao }}">
	</div>

	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{ $contas_pagar->valor }}">
	</div>

	<button type="submit" class="btn btn-outline-info mb-5 mt-3">Salvar alteração</button>
</form>
@stop