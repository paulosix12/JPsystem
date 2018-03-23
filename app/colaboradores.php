<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colaboradores extends Model
{
    protected $fillable = ['colaboradores'];
    protected $guarded = ['id'];
    protected $table = 'colaboradores';
    public $timestamps = false; 
}
