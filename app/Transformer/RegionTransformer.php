<?php
namespace App\Transformer;

use App\Models\Region;
use League\Fractal;

class RegionTransformer extends Fractal\TransformerAbstract{

    public function transform(Region $region)
    {
        return [
            'psgcCode' => $region->psgcCode,
            'regDesc' => $region->regDesc,
            'regCode' => $region->regCode,
        ];
    }
}
