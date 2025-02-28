@extends('layouts.admin')

@section('title', $product ? 'Edit Product' : 'Add Product')

@section('content')
    <h1>{{ $product ? 'Edit Product' : 'Add Product' }}</h1>

    <form action="{{ $product ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($product) @method('PUT') @endif

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="ProductName" class="form-control" value="{{ old('ProductName', $product->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Strength Circles (Optional)</label>
            <input type="text" name="strength_circles" class="form-control" value="{{ old('strength_circles', $product->strength_circles ?? '') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control">
            @if($product && $product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="100">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Price (€)</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">{{ $product ? 'Update' : 'Add' }}</button>
    </form>
@endsection
