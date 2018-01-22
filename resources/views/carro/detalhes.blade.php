@extends('layout.base');

@section('conteudo')
<div class="card">
	<div class="content">
		<h1>Detalhes do <strong class="text-primary">{{$carro->titulo}}</strong></h1>
		<ul>
			<li>
				<strong class="text-primary">Marca </strong>
				{{$carro->marca->nome}}
			</li>
			<li>
				<strong class="text-primary">Modelo </strong>
				{{$carro->modelo}}
			</li>
			<li>
				<strong class="text-primary">Ano </strong>
				{{$carro->ano}}
			</li>
			<li>
				<strong class="text-primary">Cambio </strong>
				{{$carro->cambio}}
			</li>
			<li>
				<strong class="text-primary">Combustivel </strong>
				{{$carro->combustivel}}
			</li>
			<li>
				<strong class="text-primary">Quilometragem </strong>
				{{$carro->quilometragem}}Km
			</li>
			<li>
				<strong class="text-primary">Portas </strong>
				{{$carro->portas}}
			</li>
			<li>
				<strong class="text-primary">Valor </strong>
				R$ {{$carro->valor}}
			</li>
			<li>
				<strong class="text-primary">Descrição </strong>
				{{$carro->descicao}}
			</li>
		</ul>
		<div class="row">
			<a href="{{action('CarroController@lista')}}" class="btn btn-primary">Voltar</a>
		</div>
	</div>
</div>
@stop