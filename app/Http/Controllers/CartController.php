<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class CartController extends Controller
{
    // Show cart (payment page)
    public function index()
    {
        $pay = DB::table('payment')
            ->join('products', 'payment.product_id', '=', 'products.id')
            ->where('payment.user_id', Auth::id())
            ->select(
                'products.id',
                'products.name',
                'products.price',
                'products.image'
            )
            ->get();

        return view('product_cart', compact('pay'));
    }

    // Add product to payment table
    public function add($id)
    {
        $userId = Auth::id();

        // Prevent duplicate product for same user
        $exists = DB::table('payment')
            ->where('user_id', $userId)
            ->where('product_id', $id)
            ->exists();

        if (!$exists) {
            DB::table('payment')->insert([
                'user_id' => $userId,
                'product_id' => $id,
            ]);
        }

        return redirect('/cart');
    }

    public function remove($id)
{
    DB::table('payment')
        ->where('user_id', Auth::id())
        ->where('product_id', $id)
        ->delete();

    return redirect('/cart')->with('success', 'Product removed from cart');
}

}

