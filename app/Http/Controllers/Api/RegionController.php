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
use App\Transformer\ProvinceTransformer;
use App\Transformer\CityTransformer;
use App\Transformer\BrgyTransformer;

class RegionController extends Controller
{
    use Helpers;

    /*
     * Get all regions
     */
    public function index()
    {
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
    /**
     * Get a single region by its $regCode or Region Code.
     * @param $regCode is the Region Code
     */
    public function single($regCode)
    {
        $region = Region::where('regCode',$regCode)->first();
        if(!$region)
        {
            return $this->response->errorNotFound('Could not find the region');
        }

        return $this->response->item($region, new RegionTransformer());
    }

    /*
     * Get all provinces on a region based on the region's $regCode or Region Code
     * @param $regCode is the Region Code
     */
    public function province($regCode)
    {
        $region = Region::where('regCode',$regCode)->first();
        if(!$region)
        {
            return $this->response->errorNotFound('Could not find the region');
        }
        else
        {
            $provinces = $region->province()->paginate(10);
            return $this->response->item($provinces, new ProvinceTransformer());
        }
    }
    /*
     * Get all cities in a region based on the region's $regCode or Region Code
     * @param $regCode is the Region's Code
     */
    public function city($regCode)
    {
        $region = Region::where('regCode',$regCode)->first();
        if(!$region)
        {
            return $this->response->errorNotFound('Could not find the region');
        }
        else
        {
            $cities = $region->city()->paginate(10);
            return $this->response->item($cities, new CityTransformer());
        }
    }
    /*
     * Get all barangays in a region based on the region's regCode or Region Code
     * @param $regCode is the Region's Code
     */
    public function brgy($regCode)
    {
        $region = Region::where('regCode',$regCode)->first();
        if(!$region)
        {
            return $this->response->errorNotFound('Could not find the region');
        }
        else
        {
            $brgy = $region->brgy()->paginate(10);
            return $this->response->item($brgy, new BrgyTransformer());
        }
    }
}
