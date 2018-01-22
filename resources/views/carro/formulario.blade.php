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
			<h1>Novo <strong class="text-primary">Carro</strong></h1>

			<form class="form-horizontal" action="{{action('CarroController@adiciona')}}" method="post">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
				
				<div class="form-group">
					<label class="control-label col-sm-2">Marca:</label>
					<div class="col-sm-8">
						<select name="marca_id" class="form-control">
							@foreach($marcas as $marca)
								<option value="{{$marca->id}}">{{$marca->nome}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-group ">
					<label class="control-label col-sm-2"><p>Modelo:</p></label>
					<div class="col-sm-8">
						<input type="text" name="modelo" class="form-control" value="{{ old('modelo') }}">
					</div>
				</div>

				<div class="form-group ">
					<label class="control-label col-sm-2"><p>Ano:</p></label>
					<div class="col-sm-8">
						<input type="number" min="1950" max="2018" name="ano" class="form-control" value="{{ old('ano') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Cambio</label>
					<div class="col-sm-8">
						<select name="cambio" class="form-control">
							<option value="manual">Manual</option>
							<option value="automatico">Automático:</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Combustivel:</label>
					<div class="col-sm-8">
						<select name="combustivel" class="form-control">
							<option value="gasolina">Gasolina</option>
							<option value="alcool">Álcool</option>
							<option value="flex">Flex</option>
							<option value="gas natural">Gás natural</option>
							<option value="diesel">Diesel</option>
						</select>
					</div>
				</div>

				<div class="form-group ">
					<label class="control-label col-sm-2"><p>Quilometragem:</p></label>
					<div class="col-sm-8">
						<input type="number" name="quilometragem" class="form-control" value="{{ old('quilometragem') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Portas:</label>
					<div class="col-sm-8">
						<select name="portas" class="form-control">
							<option value="2">2</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>

				<div class="form-group ">
					<label class="control-label col-sm-2"><p>Titulo:</p></label>
					<div class="col-sm-8">
						<input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}">
					</div>
				</div>

				<div class="form-group ">
					<label class="control-label col-sm-2"><p>Valor:</p></label>
					<div class="col-sm-8">
						<input type="number" name="valor" class="form-control" value="{{ old('valor') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Descrição:</label>
					<textarea name="descicao" rows="4" class="col-sm-8"></textarea>
				</div>

				<div class="row">
					<button type="submit" class="btn btn-primary">Enviar</button>
					<a href="{{action('CarroController@lista')}}" class="btn btn-second">Voltar</a>
				</div>
			</form>
			
		</div>
	</div>

@stop