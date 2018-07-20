<?php

namespace App\Transformer;

use App\Models\Province;
use League\Fractal;

class ProvinceTransformer extends Fractal\TransformerAbstract{
    public function transform(Province $province)
    {
        return [
            'psgcCode' => $province->psgcCode,
            'provDesc' => $province->provDesc,
            'regCode' => $province->regCode,
            'provCode' => $province->provCode,
        ];
    }
}
