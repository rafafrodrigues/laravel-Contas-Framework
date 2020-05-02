@extends('principal')
@section('title', 'Editar Contas Receber')

@section('content')
<h1 class="mb-3">Editar Contas Receber - {{ $contas_receber->id }}</h1>
<form action="{{action('ContasReceberController@updateReceber', $contas_receber->id)}}" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

    <!-- campo para especificar mensagem da operação na view após editar uma conta -->
	<input type="hidden" name="update" value="update">

	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao_rec" class="form-control" value="{{ $contas_receber->descricao_rec }}">
	</div>

	<div class="form-group">
		<label>Cliente:</label>
		<input type="text" name="cliente" class="form-control" value="{{ $contas_receber->cliente }}">
	</div>

	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor_rec" class="form-control" value="{{ $contas_receber->valor_rec }}">
	</div>

	<button type="submit" class="btn btn-outline-info mb-5">Salvar alteração</button>
</form>
@stop