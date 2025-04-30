@extends('layouts.admin')

@section('title', 'Manage Orders')

@section('content')
    <h1>Manage Orders</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Items</th>
                <th>Total Price</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>#{{ $order->id }}</td>
                    <td>{{ $order->items->count() }}</td>
                    <td>
                        €{{ number_format($order->items->sum(fn($item) => $item->price * $item->quantity), 2) }}
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
