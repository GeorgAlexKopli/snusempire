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
}
