<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Http\Requests\MarcasRequest;

class MarcaController extends Controller
{
    public function lista(){
    	$marcas = Marca::all();

    	return view('marca.listagem')
    	->withMarcas($marcas);
    }

    public function novo(){
    	return view('marca.formulario');
    }

    public function adiciona(MarcasRequest $request){
    	Marca::create($request->all());

    	return redirect()
    	->action('MarcaController@lista')
    	->withMensagem('criado com sucesso!');	
    }

    public function remove($id){
    	Marca::find($id)->delete();

    	return redirect()
    	->action('MarcaController@lista')
    	->withMensagem('Excluido com sucesso!');
    }

    public function altera($id){
    	$marca = Marca::find($id);
    	return view('marca.altera')
    	->withMarca($marca);
    }

    public function atualiza(MarcasRequest $request, $id){
    	Marca::find($id)->update($request->all());

    	return redirect()
    	->action('MarcaController@lista')
    	->withMensagem('Atualizado com sucesso!');
    }
}
