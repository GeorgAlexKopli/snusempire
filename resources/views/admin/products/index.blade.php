@extends('layouts.admin')

@section('title', 'Manage Products')

@section('content')
    <h1>Manage Products</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Strength Circles</th>
                <th>Price (€)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td><img src="{{ asset('storage/' . $product->image) }}" width="50"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->strength_circles ?? 'N/A' }}</td>
                    <td>€{{ number_format($product->price, 2) }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
