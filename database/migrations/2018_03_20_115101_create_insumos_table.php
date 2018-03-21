<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('cliente', 90)->nullable();
            $table->string('maquinas', 90)->nullable();
            $table->string('data', 90)->nullable();
            $table->string('colaborador', 90)->nullable();
            $table->string('combustivel', 90)->nullable();
            $table->string('pedagio', 90)->nullable();
            $table->string('alimentacao', 90)->nullable();
            $table->string('hospedagem', 90)->nullable();
            $table->string('outros', 90)->nullable();
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
        Schema::dropIfExists('financeiro');
    }
}
