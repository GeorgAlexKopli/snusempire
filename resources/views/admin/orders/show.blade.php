@extends('layouts.admin')

@section('title', 'Order Details')

@section('content')
    <h1>Order #{{ $order->id }} Details</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price (€)</th>
                <th>Subtotal (€)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product->name ?? 'Deleted Product' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->price, 2) }}</td>
                    <td>{{ number_format($item->quantity * $item->price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total:</strong> €{{ number_format($order->items->sum(fn($item) => $item->price * $item->quantity), 2) }}</p>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>
@endsection
