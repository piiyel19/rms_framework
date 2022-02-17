<?php
// Library Declare
namespace App\Http\Controllers\BPA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Http\Controllers\Controller;

class BPAController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
        date_default_timezone_set("Asia/Kuala_Lumpur"); //Timezone
        //$date = date("Y-m-d H:i:s");
        
    }

    public function create(Request $request)
    {
        // $bpa = $this->request("bpa");
        // $division = $this->request("division");
        // $department = $this->request("department");
        // $business_process = $this->request("business_process");
        // $created_by = $this->request("created_by");
        // $date_created = $this->request("date_created");
        // $bpa_completed = $this->request("bpa_completed");
        // $endorsed_by_hodv = $this->request("endorsed_by_hodv");

        // DB::table("bpa")
        //     ->insert(["$bpa" => $bpa, "$division" => $division, "$department" => $department, "$business_process" => $business_process, "$created_by" => $created_by, "$date_created" => $date_created, "$bpa_completed" => $bpa_completed, "$endorsed_by_hodv" => $endorsed_by_hodv]);

        return view('bpa.create');
    }

    public function list(Request $request)
    {
        // $id = $request->id;
        // DB::table("bpa")
        //     ->where("id", $id)->get();

        return view('bpa.list');

    }


    public function details(Request $request)
    {
        // $id = $request->id;
        // DB::table("bpa")
        //     ->where("id", $id)->get();

        return view('bpa.details');

    }


    public function rap(Request $request)
    {
        // $id = $request->id;
        // DB::table("bpa")
        //     ->where("id", $id)->get();

        return view('bpa.bpa_rap');

    }

}

