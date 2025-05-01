@extends('layouts.admin')

@section('content')
    <h1>Add Product</h1>

    <!-- Display Success or Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="strength_circles">Strength Circles</label>
            <input type="text" id="strength_circles" name="strength_circles" class="form-control" value="{{ old('strength_circles') }}">
        </div>

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" id="image" name="image" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}" required step="0.01">
        </div>

        <div class="form-group">
            <label for="url">Product URL (Optional)</label>
            <input type="text" id="url" name="url" class="form-control" value="{{ old('url') }}">
        </div>

        <div class="form-group">
            <label for="popular">Popular</label>
            <input type="checkbox" name="popular" id="popular" {{ old('popular', $product->popular ?? false) ? 'checked' : '' }}>
        </div>


        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
    
@endsection
