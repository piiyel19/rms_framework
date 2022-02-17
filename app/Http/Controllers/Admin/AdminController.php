<?php
// Library Declare
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
        date_default_timezone_set("Asia/Kuala_Lumpur"); //Timezone
        //$date = date("Y-m-d H:i:s");
    }
    public function company(Request $request)
    {
        //dd($year);
        return view('admin.company');
    }

    public function division(Request $request)
    {
        //dd($year);
        return view('admin.division');
    }

    public function unit(Request $request)
    {
        //dd($year);
        return view('admin.unit');
    }
}