@extends('layouts.app')

@vite(['public/css/product-details.css'])

@section('content')
    <!-- Product Details Section -->
    <div class="product-details-container">
        <div class="product-image">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="product-info">
            <h1>{{ $product->name }}</h1>
            @if($product->strength_circles)
                <p><strong>Strength:</strong> {{ $product->strength_circles }}</p>
            @endif
            <p><strong>Price:</strong> €{{ number_format($product->price, 2) }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>

            <!-- Add to Cart Form -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <label for="quantity"><strong>Quantity:</strong></label>
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                <button type="submit" class="btn add-to-cart">Add to Cart</button>
            </form>
        </div>
    </div>
@endsection
