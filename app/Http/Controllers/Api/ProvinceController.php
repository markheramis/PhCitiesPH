<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Transformer\ProvinceTransformer;
use App\Transformer\CityTransformer;
use App\Transformer\BrgyTransformer;

class ProvinceController extends Controller
{
    use Helpers;
    public function index()
    {
        $province = Province::paginate(10);
        if($province->count())
        {
            return $this->response->paginator($province, new ProvinceTransformer());
        }
        else
        {
            // naligaw ata si user.
            return $this->response->errorNotFound('Could not find the region');
        }
    }

    public function single($provCode)
    {
        $province = Province::where('provCode',$provCode)->first();
        if(!$province)
        {
            return $this->response->errorNotFound('Could not find the region');
        }

        return $this->response->item($province, new ProvinceTransformer());
    }

    public function city($provCode)
    {
        $province = Province::where('provCode',$provCode)->first();
        if(!$province)
        {
            return $this->response->errorNotFound('Could not find the region');
        }
        else
        {
            $cities = $province->city()->paginate(10);
            return $this->response->item($cities, new CityTransformer());
        }
    }

    public function brgy($provCode)
    {
        $province = Province::where('provCode',$provCode)->first();
        if(!$province)
        {
            return $this->response->errorNotFound('Could not find the region');
        }
        else
        {
            $brgy = $province->brgy()->paginate(10);
            return $this->response->item($brgy, new BrgyTransformer());
        }
    }
}
