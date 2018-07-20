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

    public function city(){
        return $this->belongsTo('App\Models\City','citymunCode','citymunCode');
    }

    public function province(){
        return $this->belongsTo('App\Models\Province','provCode','provCode');
    }

    public function region(){
        return $this->belongsTo('App\Models\Region','regCode','regCode');
    }

}
