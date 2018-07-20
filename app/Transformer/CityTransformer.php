<?php

namespace App\Transformer;

use App\Models\City;
use League\Fractal;

class CityTransformer extends Fractal\TransformerAbstract{

    public function transform(City $city)
    {
        return [
            'psgcCode' => $city->psgcCode,
            'citymunDesc' => $city->citymunDesc,
            'regDesc' => $city->regDesc,
            'provCode' => $city->provCode,
            'citymunCode' => $city->citymunCode,
        ];
    }
}
