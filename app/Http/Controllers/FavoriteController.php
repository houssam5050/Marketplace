<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        
        $products = DB::table('products')->paginate(9);

        $favorits = collect(); 

        if (Auth::check()) {
            $favorits = DB::table('favorits')
                ->join('products', 'favorits.product_id', '=', 'products.id')
                ->where('favorits.user_id', Auth::id())
                ->select('products.*')
                ->get();
        }
        
        return view('index', compact('products', 'favorits'));
    }

    public function toggle($productId)
    {
        if (!Auth::check()) {
            return response()->json(['status' => 'error', 'message' => 'Not logged in']);
        }

        $userId = Auth::id();

        $exists = DB::table('favorits')
                    ->where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->exists();

        if ($exists) {
            DB::table('favorits')
                ->where('user_id', $userId)
                ->where('product_id', $productId)
                ->delete();
            return response()->json(['status' => 'removed']);
        } else {
            DB::table('favorits')->insert([
                'user_id' => $userId,
                'product_id' => $productId,
            ]);
            return response()->json(['status' => 'added']);
        }
    }
}
