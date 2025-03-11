<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            return redirect()->route('checkout')->with('error', 'Your cart is empty.');
        }

        // Create Order
        $order = Order::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'total_price' => collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']),
            'status' => 'pending',
        ]);

        // Create Order Items
        foreach ($cart as $id => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear cart
        Session::forget('cart');

        return redirect()->route('products')->with('success', 'Order placed successfully!');
    }
    public function index()
{
    $cart = Session::get('cart', []);
    return view('pages.checkout');
}

}

