<?php
// Library Declare
namespace App\Http\Controllers\Archieve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Http\Controllers\Controller;


class RiskDocumentController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
        date_default_timezone_set("Asia/Kuala_Lumpur"); //Timezone
        //$date = date("Y-m-d H:i:s");
    }
    public function archieve($year)
    {
        //dd($year);
        return view('archieve.list')->with(array('year'=>$year));
    }
}