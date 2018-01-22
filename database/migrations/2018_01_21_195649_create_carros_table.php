<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')
            ->references('id')
            ->on('marcas')
            ->onDelete('cascade');
            $table->string('modelo');
            $table->year('ano');
            $table->string('cambio');
            $table->string('combustivel');
            $table->unsignedInteger('quilometragem');
            $table->unsignedTinyInteger('portas');
            $table->string('titulo');
            $table->mediumText('descicao');
            $table->unsignedDecimal('valor', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
