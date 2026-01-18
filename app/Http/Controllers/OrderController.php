<?php

namespace App\Http\Controllers;

use DB;
use Auth;

class OrderController extends Controller
{
    public function store($productId)
    {
        $userId = Auth::id();

        // Get product price
        $product = DB::table('products')->where('id', $productId)->first();

        if (!$product) {
            return redirect('/cart')->with('error', 'Product not found');
        }

        // Insert into orders table
        DB::table('orders')->insert([
            'user_id'    => $userId,
            'product_id' => $productId,
            'total'      => $product->price, // price = total for now
            'quantity'   => 1,               // ignored later
            'status'     => 'pending',
            'created_at' => now(),
        ]);

        // Remove product from cart
        DB::table('payment')
            ->where('user_id', $userId)
            ->where('product_id', $productId)
            ->delete();

        return redirect('/cart')->with('success', 'Order placed successfully');
    }
}
