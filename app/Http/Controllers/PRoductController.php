<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class PRoductController extends Controller
{
    function index(Request $request)
    {
        $query = DB::table("products");


        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        $products = $query->withQueryString()->paginate(6);

        return view("index", compact("products"));
    }

    function ProductId($id)
    {

        $item = DB::table("products")->where("id", $id)->first();

        return view("product_details", compact("item"));
    }
}