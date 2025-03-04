<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('pages.products', compact('products')); // Pass products to the view
    }

    public function search(Request $request)
    {
    $query = $request->input('query');

    // Search for products by name
    $products = Product::where('name', 'like', '%' . $query . '%')->get();

    // Return the search results view with the products
    return view('pages.search-results', compact('products'));
    }
}
