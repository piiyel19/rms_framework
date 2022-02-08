<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class Ui_Template extends Controller
{
    //
    public function index()
    {
        return view('template/index');
    }

    public function controller()
    {
        return view('template/controller');
    }

    public function model()
    {
        return view('template/model');
    }


    public function view()
    {
        return view('template/view');
    }


    public function route()
    {
        return view('template/route');
    }


    public function page_customize()
    {
        return view('template/page_customize');
    }




    public function customize_color(Request $request)
    {
        $segment_a_bg_val = $request->segment_a_bg_val;
        $segment_a_font_val = $request->segment_a_font_val;
        $segment_a_bg_nav_val = $request->segment_a_bg_nav_val;
        $segment_a_font_nav_val = $request->segment_a_font_nav_val;
        $segment_b_bg_val = $request->segment_b_bg_val;
        $segment_b_font_val = $request->segment_b_font_val;
        $segment_b_bg_nav_val = $request->segment_b_bg_nav_val;
        $segment_b_font_nav_val = $request->segment_b_font_nav_val;
        $segment_c_bg_val = $request->segment_c_bg_val;
        $segment_c_bg_header_val = $request->segment_c_bg_header_val;
        $segment_c_bg_contain_val = $request->segment_c_bg_contain_val;
        $segment_c_font_val = $request->segment_c_font_val;
        $segment_d_bg_val = $request->segment_d_bg_val;
        $segment_d_bg_contain_val = $request->segment_d_bg_contain_val;
        $segment_d_font_title_val = $request->segment_d_font_title_val;
        $segment_e_bg_val = $request->segment_e_bg_val;
        $segment_e_font_val = $request->segment_e_font_val;


        $check = DB::table('page_color')->first();

        if(empty($check)){
            DB::table('page_color')->insert([
                'segment_a_bg_val'=>$segment_a_bg_val,
                'segment_a_font_val'=>$segment_a_font_val,
                'segment_a_bg_nav_val'=>$segment_a_bg_nav_val,
                'segment_a_font_nav_val'=>$segment_a_font_nav_val,
                'segment_b_bg_val'=>$segment_b_bg_val,
                'segment_b_font_val'=>$segment_b_font_val,
                'segment_b_bg_nav_val'=>$segment_b_bg_nav_val,
                'segment_b_font_nav_val'=>$segment_b_font_nav_val,
                'segment_c_bg_val'=>$segment_c_bg_val,
                'segment_c_bg_header_val'=>$segment_c_bg_header_val,
                'segment_c_bg_contain_val'=>$segment_c_bg_contain_val,
                'segment_c_font_val'=>$segment_c_font_val,
                'segment_d_bg_val'=>$segment_d_bg_val,
                'segment_d_bg_contain_val'=>$segment_d_bg_contain_val,
                'segment_d_font_title_val'=>$segment_d_font_title_val,
                'segment_e_bg_val'=>$segment_e_bg_val,
                'segment_e_font_val'=>$segment_e_font_val
            ]);
        } else {
            DB::table('page_color')->update([
                'segment_a_bg_val'=>$segment_a_bg_val,
                'segment_a_font_val'=>$segment_a_font_val,
                'segment_a_bg_nav_val'=>$segment_a_bg_nav_val,
                'segment_a_font_nav_val'=>$segment_a_font_nav_val,
                'segment_b_bg_val'=>$segment_b_bg_val,
                'segment_b_font_val'=>$segment_b_font_val,
                'segment_b_bg_nav_val'=>$segment_b_bg_nav_val,
                'segment_b_font_nav_val'=>$segment_b_font_nav_val,
                'segment_c_bg_val'=>$segment_c_bg_val,
                'segment_c_bg_header_val'=>$segment_c_bg_header_val,
                'segment_c_bg_contain_val'=>$segment_c_bg_contain_val,
                'segment_c_font_val'=>$segment_c_font_val,
                'segment_d_bg_val'=>$segment_d_bg_val,
                'segment_d_bg_contain_val'=>$segment_d_bg_contain_val,
                'segment_d_font_title_val'=>$segment_d_font_title_val,
                'segment_e_bg_val'=>$segment_e_bg_val,
                'segment_e_font_val'=>$segment_e_font_val
            ]);
        }

        return redirect('/page_customize')->with('msg_succes', 'Success !');
    }

}
