<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('clientes')->nullable();
            $table->longText('projeto')->nullable();
            $table->longText('produto')->nullable();
            $table->longText('preco')->nullable();
            $table->longText('quant')->nullable();
            $table->longText('ipi')->nullable();
            $table->longText('entrega')->nullable();
            $table->longText('total')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
}
