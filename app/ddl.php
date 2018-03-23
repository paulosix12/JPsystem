<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ddl extends Model
{
    protected $fillable = ['ddl'];
    protected $guarded = ['id'];
    protected $table = 'ddl';
    public $timestamps = false;    
}
