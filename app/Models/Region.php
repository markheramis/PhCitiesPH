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

    public function province(){
        return $this->hasMany('App\Models\Province','regCode','regCode');
    }

    public function city(){
        return $this->hasMany('App\Models\City','regDesc','regCode');
    }

    public function brgy(){
        return $this->hasMany('App\Models\Brgy','regCode','regCode');
    }

}
