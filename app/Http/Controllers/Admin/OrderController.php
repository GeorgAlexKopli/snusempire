<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.product')->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->items()->delete();
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }

    public function edit($id)
{
    $order = Order::with('items')->findOrFail($id);
    $products = Product::all();
    return view('admin.orders.edit', compact('order', 'products'));
}

public function update(Request $request, $id)
{
    $order = Order::with('items')->findOrFail($id);

    $validated = $request->validate([
        'items.*.product_id' => 'required|exists:products,id',
        'items.*.quantity' => 'required|integer|min:1',
        'items.*.price' => 'required|numeric|min:0',
    ]);

    foreach ($order->items as $index => $item) {
        $item->update([
            'product_id' => $validated['items'][$index]['product_id'],
            'quantity' => $validated['items'][$index]['quantity'],
            'price' => $validated['items'][$index]['price'],
        ]);
    }

    return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
}
}
