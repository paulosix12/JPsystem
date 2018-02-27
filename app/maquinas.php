<?php

namespace App;
use SoftDeletes;


use Illuminate\Database\Eloquent\Model;

class maquinas extends Model
{
    protected $fillable = ['cliente','nomedamaquina','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];
    protected $table = 'maquinas';
}
