<?php
// Library Declare
namespace App\Http\Controllers\RReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Http\Controllers\Controller;

class RReviewController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
        date_default_timezone_set("Asia/Kuala_Lumpur"); //Timezone
        //$date = date("Y-m-d H:i:s");
        
    }

    public function doc_pending_review(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rreview.doc_pending_review');

    }


    public function pending_hodv_endorse(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rreview.pending_hodv_endorse');

    }


    public function rmd_pending_for_review(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rreview.rmd_pending_for_review');

    }



    public function view(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rreview.view');

    }


    public function view_documents(Request $request)
    {
        // $id = $request->id;
        // DB::table("")
        //     ->where("id", $id)->get();

        return view('rreview.view_documents');

    }

}

