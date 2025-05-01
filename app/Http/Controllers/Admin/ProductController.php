<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'strength_circles' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|numeric',
            'url' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        $product = new Product();
        $product->name = $validated['name'];
        $product->strength_circles = $validated['strength_circles'];
        $product->image = $imagePath;
        $product->price = $validated['price'];
        $product->url = $validated['url'] ?? null;
        $product->popular = $request->has('popular');  // handle popular checkbox
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'ProductName' => 'required|string|max:255',
            'strength_circles' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'url' => 'nullable|string|max:255',
        ]);

        $imagePath = $product->image;
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $product->image);
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name' => $validated['ProductName'],
            'strength_circles' => $validated['strength_circles'] ?? null,
            'image' => $imagePath,
            'price' => $validated['price'],
            'url' => $validated['url'] ?? null,
            'popular' => $request->has('popular'),  // handle popular checkbox
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/' . $product->image);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}
