<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'psgcCode','provDesc','regCode','provCode'
    ];

    protected $hidden = [

    ];
}
