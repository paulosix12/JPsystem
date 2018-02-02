<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('numero')->nullable();
            $table->string('projeto')->nullable();
            $table->string('fornecedor')->nullable();
            $table->string('clientes')->nullable();
            $table->string('produto')->nullable();
            $table->string('tipoProduto')->nullable();
            $table->string('preco')->nullable();
            $table->string('entrega')->nullable();
            $table->string('quant')->nullable();
            $table->string('ipi')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('vendas');
    }
}
