<?php
// Library Declare
namespace App\Http\Controllers\RAP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Http\Controllers\Controller;

class RAPController extends Controller
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

        return view('rap.list');

    }

}

