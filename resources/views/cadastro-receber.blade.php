@extends('principal')
@section('title', 'Cadastro Contas Receber')

@section('content')
<h1>Cadastro de Contas Receber</h1>
@if (count($errors) > 0)
  <div class="alert alert-danger">
  	 <strong>Erros:</strong>
  	 <ul>
  	 	@foreach($errors->all() as $error)
  	 	  <li>{{$error}}</li>
  	 	@endforeach
  	 </ul> 
  </div>
@endif
<form action="{{ action('ContasReceberController@salvarReceber')}}" method="POST">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

	<input type="hidden" name="insert" value="insert">

	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao_rec" class="form-control" value="{{old('descricao_rec')}}">
	</div>

	<div class="form-group">
		<label>Cliente:</label>
		<input type="text" name="cliente" class="form-control" value="{{old('cliente')}}">
	</div>

	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor_rec" class="form-control" value="{{old('valor_rec')}}">
	</div>

	<button type="submit" class="btn btn-outline-info mb-4">Cadastrar</button>
</form>
@stop