<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    protected $fillable = ['cliente','endereco','cidade_cliente','estado_cliente','cep_cliente','insc_municipal_cliente','insc_estadual_cliente','cnpj_cliente','nome_responsavel_cliente','telefone_cliente','email_respon_cliente'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clientes';
}
