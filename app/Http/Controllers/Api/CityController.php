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

class CityController extends Controller
{
    use Helpers;

    public function index(){
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

    public function single($code){
        $city = City::where('psgcCode',$code)->first();

        if(!$city){
            return $this->response->errorNotFound('Could not find the city');
        }
        return $this->response->item($city, new CityTransformer());
    }
}
