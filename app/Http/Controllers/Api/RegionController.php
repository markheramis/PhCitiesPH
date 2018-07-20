<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\DB;
use App\Models\Region;
use App\Transformer\RegionTransformer;

class RegionController extends Controller
{
    use Helpers;
    public function index(){
        $region = Region::paginate(10);
        if($region->count())
        {
            return $this->response->paginator($region, new RegionTransformer());
        }
        else
        {
            // naligaw ata si user.
            return $this->response->errorNotFound('Could not find the region');
        }
    }

    public function single($code){
        $region = Region::where('psgcCode',$code)->first();
        if(!$region)
        {
            return $this->response->errorNotFound('Could not find the region');
        }

        return $this->response->item($region, new RegionTransformer());
    }
}
