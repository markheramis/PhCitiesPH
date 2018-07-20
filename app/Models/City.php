<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $fillable = [
        'psgcCode','citymunDesc','regDesc','provCode','citymunCode'
    ];

    protected $hidden = [

    ];
}
