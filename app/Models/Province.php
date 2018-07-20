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

    public function region(){
        return $this->belongsTo('App\Models\Region','regCode','regCode');
    }

    public function city(){
        return $this->hasMany('App\Models\City','provCode','provCode');
    }

    public function brgy(){
        return $this->hasMany('App\Models\Brgy','provCode','provCode');
    }
}
