<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['clientes','projeto','produto','preco','quant','ipi','total'];
    protected $guarded = ['id_pedido', 'created_at', 'update_at'];
    protected $table = 'pedidos';
}
