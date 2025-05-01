<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Tooted</title>
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Header -->
    <x-navbar />
    <img src="{{ asset('/img/productbanner.png') }}" alt="Product Banner">

<!-- Popular Products Section -->
<div class="popular-products">
    <h2>Popular Products</h2>
    <div class="product-container">
        @foreach($popularProducts as $product)
            <div class="product-card">
                <a href="{{ route('products.show', $product->id) }}">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <h2>{{ $product->name }}</h2>
                    @if($product->strength_circles)
                        <p>Strength: {{ $product->strength_circles }}</p>
                    @endif
                    <p>€{{ number_format($product->price, 2) }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>


    <!-- Products Section -->
    <div class="product-container">
        @foreach($products as $product)
            <div class="product-card">
                <a href="{{ route('products.show', $product->id) }}">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <h2>{{ $product->name }}</h2>
                    @if($product->strength_circles)
                        <p>Strength: {{ $product->strength_circles }}</p>
                    @endif
                    <p>€{{ number_format($product->price, 2) }}</p>
                </a>
            </div>
        @endforeach
    </div>

    <x-footer />

</body>
</html>
