<?php
namespace App\Transformer;

use App\Models\Brgy;
use League\Fractal;

class BrgyTransformer extends Fractal\TransformerAbstract{
    public function transform(Brgy $brgy)
    {
        return [
            'brgyCode' => $brgy->brgyCode,
            'brgyDesc' => $brgy->brgyDesc,
            'regCode' => $brgy->regCode,
            'provCode' => $brgy->provCode,
            'citymunCode' => $brgy->citymunCode,
        ];
    }
}
