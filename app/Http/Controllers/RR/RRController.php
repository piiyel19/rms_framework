<?php
// Library Declare
namespace App\Http\Controllers\RR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Http\Controllers\Controller;

class RRController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
        date_default_timezone_set("Asia/Kuala_Lumpur"); //Timezone
        //$date = date("Y-m-d H:i:s");
        
    }

    public function list(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rr.list');

    }


    public function details(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rr.details');

    }

}

