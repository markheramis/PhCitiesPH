<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\DB;
use App\Models\Brgy;
use App\Transformer\BrgyTransformer;

class BrgyController extends Controller
{
    use Helpers;

    public function index()
    {
        $brgy = Brgy::paginate(10);
        if($brgy->count())
        {
            return $this->response->paginator($brgy, new BrgyTransformer());
        }
        else
        {
            return $this->response->errorNotFound('Could not find the brgy');
        }
    }

    public function single($code)
    {
        $brgy = Brgy::where('brgyCode', $code)->first();

        if(!$brgy){
            return $this->response->errorNotFound('Could not find the brgy');
        }
        return $this->response->item($brgy, new BrgyTransformer());
    }

}
