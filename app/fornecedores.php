<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    protected $fillable = ['fornecedores'];
    protected $guarded = ['id'];
    protected $table = 'fornecedores';
    public $timestamps = false;    
}
