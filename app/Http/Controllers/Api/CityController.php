<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Transformer\CityTransformer;
use App\Transformer\BrgyTransformer;

class CityController extends Controller
{
    use Helpers;

    public function index()
    {
        $city = City::paginate(10);
        if($city->count())
        {
            return $this->response->paginator($city, new CityTransformer());
        }
        else
        {
            return $this->response->errorNotFound('Could not find the city');
        }
    }

    public function single($citymunCode)
    {
        $city = City::where('citymunCode',$citymunCode)->first();

        if(!$city){
            return $this->response->errorNotFound('Could not find the city');
        }
        return $this->response->item($city, new CityTransformer());
    }

    public function brgy($citymunCode)
    {
        $city = City::where('citymunCode',$citymunCode)->first();
        if(!$city){
            return $this->response->errorNotFound('Could not find the city');
        }
        else
        {
            $brgy = $city->brgy()->paginate(10);
            return $this->response->item($brgy, new BrgyTransformer());
        }
    }
}
