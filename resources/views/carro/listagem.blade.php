@extends('layout.base');

@section('conteudo')

<div class="card">
	<div class="content">

		@if ($mensagem = Session::get('mensagem'))
		    <div class="alert alert-success">
		        <p> {{ $mensagem }}</p>
		    </div>
		@endif

		<h1>Lista de <strong class="text-primary">Carros</strong></h1>

		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th class="centralizar">Carros</th>
					<th class="centralizar">Valor</th>
					<th class="centralizar">Detalhes</th>
					<th class="centralizar">Excluir</th>
					<th class="centralizar">Editar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($carros as $carro)
					<tr>
						<td class="centralizar cp-cb">
							{{$carro->titulo}}
						</td>
						<td class="centralizar cp-cb">
							{{$carro->valor}}
						</td>
						<td class="centralizar cp-cb">
							<a href="{{action('CarroController@mostra', $carro->id)}}">
								<span class="fa fa-info fa-lg text-primary"></span>
							</a>
						</td>
						<td class="centralizar cp-cb">
							<a href="{{action('CarroController@remove', $carro->id)}}">
								<span class="fa fa-trash fa-lg text-primary"></span>
							</a>
						</td>
						<td class="centralizar ">
							<a href="{{action('CarroController@altera', $carro->id)}}">
								<span class="fa fa-pencil-square-o fa-lg text-primary"></span>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="pull-right">
			<a href="{{action('CarroController@novo')}}">
				<span class="fa fa-plus-circle fa-2x text-primary"></span>
			</a>
		</div>
	</div>
</div>

@stop