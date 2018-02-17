<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['numero','projeto', 'clientes', 'produto', 'tipoProduto','preco','entrega','quant','ipi','total','fornecedor', 'pagamento', 'condicao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'pedidos';
}
