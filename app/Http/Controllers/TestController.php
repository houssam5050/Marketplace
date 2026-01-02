<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function enter(){
        $test = DB::table("users")->get();
        return view("test", compact( "test"));
    }
}