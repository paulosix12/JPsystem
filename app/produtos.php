<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = ['nome_do_produto','quantidade','valor_produto','fornecedor','tipo','descricao'];
    protected $guarded = ['id_produto', 'created_at', 'update_at'];
    protected $table = 'produtos';
}
