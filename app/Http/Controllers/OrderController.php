<?php

namespace App\Http\Controllers;

use DB;
use Auth;

class OrderController extends Controller
{
    public function store($productId)
    {
        $userId = Auth::id();

        $product = DB::table('products')->where('id', $productId)->first();

        if (!$product) {
            return redirect('/cart')->with('error', 'Product not found');
        }

        DB::table('orders')->insert([
            'user_id'    => $userId,
            'product_id' => $productId,
            'total'      => $product->price, 
            'quantity'   => 1,              
            'status'     => 'pending',
            'created_at' => now(),
        ]);

        DB::table('payment')
            ->where('user_id', $userId)
            ->where('product_id', $productId)
            ->delete();

        return redirect('/cart')->with('success', 'Order placed successfully');
    }
}
