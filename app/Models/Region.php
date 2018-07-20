<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'psgcCode','regDesc','regCode'
    ];

    protected $hidden = [

    ];
}
