@extends('layouts.app')

@vite(['resources/css/app.css', 'public/css/search-results.css'])

@section('content')

    <div class="search-results">
        <h1>Otsingutulemused</h1>
        
        @if($products->isEmpty())
            <p>No products found for your search.</p>
        @else
            <div class="product-container">
                @foreach($products as $product)
                    <div class="product-card">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        <h2>{{ $product->name }}</h2>

                        @if($product->strength_circles)
                            <p>Strength: {{ $product->strength_circles }}</p>
                        @endif

                        <p>€{{ number_format($product->price, 2) }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <x-footer />
@endsection
