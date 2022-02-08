<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

use File;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
}
