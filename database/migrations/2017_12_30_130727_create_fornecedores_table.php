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
            $table->increments('id');
            $table->string('fornecedor', 90)->nullable();
            $table->string('cidade_for', 20)->nullable();
            $table->string('estado_for', 15)->nullable();
            $table->string('cep_for', 10)->nullable()->nullable();
            $table->string('insc_municipal_for', 20)->nullable();
            $table->string('insc_estadual_for', 20)->nullable();
            $table->string('cnpj_for', 20)->nullable()->nullable();
            $table->string('nome_responsavel_for', 30)->nullable();
            $table->string('telefone_for', 90)->nullable();
            $table->string('email_respon_for', 90)->nullable();
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
