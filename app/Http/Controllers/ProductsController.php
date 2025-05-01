<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(Request $request)
{
    $products = Product::all();
    $popularProducts = Product::where('popular', true)->get();

    if ($request->has('popular')) {
        // If the 'popular' query param is present, only show popular products
        $products = $popularProducts;
    }

    return view('pages.products', compact('products', 'popularProducts'));
}


    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', '%' . $query . '%')->get();

        return view('pages.search-results', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product-details', compact('product'));
    }
}
