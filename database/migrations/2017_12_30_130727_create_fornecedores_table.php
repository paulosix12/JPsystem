<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id_for');
            $table->string('fornecedor', 90);
            $table->string('cidade_for', 20);
            $table->string('estado_for', 5);
            $table->string('cep_for', 10);
            $table->string('insc_municipal_for', 20);
            $table->string('insc_estadual_for', 20);
            $table->string('cnpj_for', 20);
            $table->string('nome_responsavel_for', 30);
            $table->string('telefone_for', 90);
            $table->string('email_respon_for', 90);
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
        Schema::dropIfExists('fornecedores');
    }
}
