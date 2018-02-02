<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable = ['numero','projeto','fornecedor','clientes','produto','tipoProduto','preco','entrega','quant','ipi','total'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'vendas';
}
