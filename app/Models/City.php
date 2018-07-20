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

    public function province(){
        return $this->belongsTo('App\Models\Province','provCode','provCode');
    }

    public function region(){
        return $this->belongsTo('App\Models\Region','regCode','regCode');
    }

    public function brgy(){
        return $this->hasMany('App\Models\Brgy','citymunCode','citymunCode');
    }
}
