<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Show all products (Admin view)
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Show form to add a new product
    public function create()
    {
        return view('admin.products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'strength_circles' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // image validation
            'price' => 'required|numeric',
            'url' => 'nullable|string|max:255', // URL is optional
        ]);

        // Store the image and get the file path
        $imagePath = $request->file('image')->store('products', 'public');

        // Create the new product record
        $product = new Product();
        $product->name = $validated['name'];
        $product->strength_circles = $validated['strength_circles'];
        $product->image = $imagePath; // Store the path
        $product->price = $validated['price'];
        $product->url = $validated['url'] ?? null; 
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
    }

    // Show form to edit an existing product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Update the product
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'ProductName' => 'required|string|max:255',
            'strength_circles' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'url' => 'nullable|string|max:255', // URL is optional
        ]);

        $imagePath = $product->image;
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $product->image);
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name' => $validated['ProductName'],
            'strength_circles' => $validated['strength_circles'],
            'image' => $imagePath,
            'price' => $validated['price'],
            'url' => $validated['url'] ?? null, // Set URL if provided
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    // Delete the product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/' . $product->image); // Delete the image from storage
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}
