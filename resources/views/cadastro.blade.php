@extends('principal')
@section('title', 'Cadastrar Contas')

@section('content')
<h1>Cadastro de contas</h1>
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
<form action="{{ action('ContasPagarController@salvar')}}" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

	<input type="hidden" name="insert" value="insert">

	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{old('descricao')}}">
	</div>

	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{old('valor')}}">
	</div>

	<button type="submit" class="btn btn-outline-info mb-4">Cadastrar</button>
</form>
@stop