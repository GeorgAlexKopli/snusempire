@extends('layouts.admin')

@section('title', 'Edit Order')

@section('content')
    <h1>Edit Order #{{ $order->id }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        @foreach($order->items as $index => $item)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Item #{{ $index + 1 }}</h5>

                    <div class="mb-3">
                        <label class="form-label">Product</label>
                        <select name="items[{{ $index }}][product_id]" class="form-control" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}" {{ $product->id == $item->product_id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" name="items[{{ $index }}][quantity]" class="form-control" value="{{ old("items.$index.quantity", $item->quantity) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price (€)</label>
                        <input type="number" name="items[{{ $index }}][price]" step="0.01" class="form-control" value="{{ old("items.$index.price", $item->price) }}" required>
                    </div>
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Update Order</button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
