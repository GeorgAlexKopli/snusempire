@extends('layouts.admin')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" id="name" name="ProductName" class="form-control" value="{{ old('ProductName', $product->name) }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="popular">Popular</label>
            <input type="checkbox" id="popular" name="popular" {{ old('popular', $product->popular ?? false) ? 'checked' : '' }}>
        </div>

    
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
