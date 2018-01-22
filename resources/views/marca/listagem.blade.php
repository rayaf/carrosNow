@extends('layout.base');

@section('conteudo')

<div class="card">
	<div class="content">

		@if ($mensagem = Session::get('mensagem'))
		    <div class="alert alert-success">
		        <p> {{ $mensagem }}</p>
		    </div>
		@endif

		<h1>Lista de <strong class="text-primary">Marcas</strong></h1>

		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th class="centralizar">Marca</th>
					<th class="centralizar">Excluir</th>
					<th class="centralizar">Editar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($marcas as $marca)
					<tr>
						<td class="centralizar cp-cb">
							{{$marca->nome}}
						</td>
						<td class="centralizar cp-cb">
							<a href="{{action('MarcaController@remove', $marca->id)}}">
								<span class="fa fa-trash fa-lg text-primary"></span>
							</a>
						</td>
						<td class="centralizar ">
							<a href="{{action('MarcaController@altera', $marca->id)}}">
								<span class="fa fa-pencil-square-o fa-lg text-primary"></span>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="pull-right">
			<a href="{{action('MarcaController@novo')}}">
				<span class="fa fa-plus-circle fa-2x text-primary"></span>
			</a>
		</div>
	</div>
</div>

@stop