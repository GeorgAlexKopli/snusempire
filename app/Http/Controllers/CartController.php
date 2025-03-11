<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);

        // Get the cart from session
        $cart = Session::get('cart', []);

        // If product is already in cart, update quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'image' => $product->image
            ];
        }

        // Save cart back to session
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Toode lisatud ostukorvi!');
    }

    public function index()
    {
        $cart = Session::get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, intval($request->input('quantity', 1)));
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Ostukorv uuendatud!');
    }

    public function remove($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Toode eemaldatud ostukorvist!');
    }
}
