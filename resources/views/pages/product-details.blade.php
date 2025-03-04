@extends('layouts.app')

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
        </div>
    </div>
@endsection
