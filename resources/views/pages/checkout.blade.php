@extends('layouts.app')

@vite(['public/css/checkout.css'])

@section('content')
    <div class="checkout-container">
        <h1>Checkout</h1>

        @if(empty($cart))
            <p>Your cart is empty. <a href="{{ route('products') }}">Continue Shopping</a></p>
        @else
            <div class="order-summary">
                <h2>Order Summary</h2>
                <table class="checkout-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach($cart as $id => $item)
                            @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="checkout-image">
                                </td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>€{{ number_format($item['price'], 2) }}</td>
                                <td>€{{ number_format($subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p class="total-amount"><strong>Total: €{{ number_format($total, 2) }}</strong></p>
            </div>

            <form action="{{ route('checkout.process') }}" method="POST" class="checkout-form">
                @csrf
                <h2>Billing Details</h2>
                
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Shipping Address:</label>
                <textarea id="address" name="address" required></textarea>

                <button type="submit" class="checkout-btn">Proceed to Payment</button>
            </form>
        @endif
    </div>
@endsection
