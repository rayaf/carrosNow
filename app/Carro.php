<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carros';
    protected $fillable = [
    	'marca_id', 'modelo', 'ano', 'cambio', 'combustivel',
    	'quilometragem', 'portas', 'titulo', 'descicao', 'valor'
    ];

    public function marca(){
    	return $this->belongsTo('App\Marca');
    }
}
