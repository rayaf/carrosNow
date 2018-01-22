<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;
use App\Marca;
use App\Http\Requests\CarrosRequest;

class CarroController extends Controller
{
    public function lista()
	{
		$carros = Carro::all();

		return view('carro.listagem')
		->withCarros($carros);
	}

	public function mostra($id){
		
		$resposta = Carro::find($id);
		if(empty($resposta)){
			return "não ah resultado";
		}
		return view('carro.detalhes')
		->withCarro($resposta);
	}

	public function novo(){
		$marcas = Marca::all();

		return view('carro.formulario')
		->withMarcas($marcas);
	}

	public function adiciona(CarrosRequest $request){
		Carro::create($request->all());

		return redirect()
		->action('CarroController@lista')
		->withMensagem('Adicionado com sucesso!');
	}

	public function remove($id){
		Carro::find($id)->delete();

		return redirect()
		->action('CarroController@lista')
		->withhMensagem('Excluido com sucesso!');
	}

	public function altera($id){
		$carro = Carro::find($id);
		$marcas = Marca::all();
		return view('carro.altera')
		->withCarro($carro)
		->withMarcas($marcas);
	}

	public function atualiza(CarrosRequest $request, $id){
		Carro::find($id)->update($request->all());

		return redirect()
		->action('CarroController@lista')
		->withhMensagem('Atualizado com sucesso!');
	}
}
