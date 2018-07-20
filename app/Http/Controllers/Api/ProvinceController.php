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

class ProvinceController extends Controller
{
    use Helpers;
    public function index(){
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

    public function single($code){
        $province = Province::where('psgcCode',$code)->first();
        if(!$province)
        {
            return $this->response->errorNotFound('Could not find the region');
        }

        return $this->response->item($province, new ProvinceTransformer());
    }
}
