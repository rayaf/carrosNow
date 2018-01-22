@extends('layout.base');

@section('conteudo')
	<h1>Bem vindo!</h1>
	<h2>Deseja ver a lista de carros ou de marcas?</h2>
	<div class="card">
		<div class="content centralizar">
			<div class="row">
				<a href="{{action('CarroController@lista')}}">
					<span class="fa fa-car fa-4x text-primary"></span>
				</a>
				<h3>Carros</h3>
<br>
				<a href="{{action('MarcaController@lista')}}">
					<span class="fa fa-tags fa-4x text-primary"></span>
				</a>
				<h3>Marcas</h3>
			</div>
		</div>
	</div>
@stop