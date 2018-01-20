<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['clientes','projeto','produto','preco','quant','ipi','entrega','total','totalFinal'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'pedidos';
}
