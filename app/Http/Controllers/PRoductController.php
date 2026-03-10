<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PRoductController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('products');

        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $products = $query->paginate(12)->withQueryString();

        $categories = DB::table('products')
            ->select('category')
            ->whereNotNull('category')
            ->distinct()
            ->get();

        $selectedCategory = $request->category;

        $favorits = collect(); 

        if (Auth::check()) {
            $favorits = DB::table('favorits')
                ->where('user_id', Auth::id())
                ->join('products', 'favorits.product_id', '=', 'products.id')
                ->select('products.*', 'favorits.id as favorite_id')
                ->get();
        }

        return view('index', compact(
            'products',
            'categories',
            'selectedCategory',
            'favorits'
        ));
    }

    public function ProductId($id)
    {
        $item = DB::table('products')->where('id', $id)->first();
        return view('product_details', compact('item'));
    }
}
