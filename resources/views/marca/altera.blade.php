@extends('layout.base');

@section('conteudo')
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul> 
				@foreach($errors->all() as $errors)
					<li>{{$errors}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="card">
		<div class="content centralizar">
			<h1 class="">Atualizar <strong class="text-primary">Marca</strong></h1>

			<form class="form-horizontal" action="{{action('MarcaController@atualiza', $marca->id)}}" method="post">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
				
				<div class="form-group ">
					<label class="control-label col-sm-2"><p>Nome:</p></label>
					<div class="col-sm-8">
						<input type="text" name="nome" class="form-control" value="{{ $marca->nome }}">
					</div>
				</div>
				<div class="row">
					<button type="submit" class="btn btn-primary">Enviar</button>
					<a href="{{action('MarcaController@lista')}}" class="btn btn-second">Voltar</a>
				</div>
			</form>
		</div>
	</div>
@stop