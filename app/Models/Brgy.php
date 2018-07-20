<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brgy extends Model
{
    protected $table = 'brgy';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'brgyCode','brgyDesc','regCode','provCode','citymunCode'
    ];

    protected $hidden = [

    ];
}
