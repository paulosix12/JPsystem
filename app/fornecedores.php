<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    protected $fillable = ['id_for','fornecedor','cidade_for','estado_for','cep_for','insc_municipal_for','insc_estadual_for','cnpj_for','nome_responsavel_for','telefone_for','email_respon_for'];
    protected $guarded = ['id_for', 'created_at', 'update_at'];
    protected $table = 'fornecedores';
}
