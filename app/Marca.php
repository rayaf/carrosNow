<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = ['nome'];

    public function carro(){
    	return $this->hasMany('App\Carro');
    }
}
