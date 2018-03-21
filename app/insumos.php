<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    protected $fillable = ['cliente','maquinas','data','colaborador','combustivel','pedagio','alimentacao','hospedagem','outros',];
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];
    protected $table = 'insumos';
}
