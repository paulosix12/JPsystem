<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('cliente', 90);
            $table->string('cidade_cliente', 20);
            $table->string('estado_cliente', 5);
            $table->string('cep_cliente', 10);
            $table->string('insc_municipal_cliente', 20);
            $table->string('insc_estadual_cliente', 20);
            $table->string('cnpj_cliente', 20);
            $table->string('nome_responsavel_cliente', 30);
            $table->string('telefone_cliente', 90);
            $table->string('email_respon_cliente', 90);
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
        Schema::dropIfExists('clientes');
    }
}
