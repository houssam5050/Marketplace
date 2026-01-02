<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function intro(){
          $products = DB::table("products")->get();
        return view("introduction", compact( "products"));
    }
}
