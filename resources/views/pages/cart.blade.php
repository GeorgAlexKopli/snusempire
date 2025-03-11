@extends('layouts.app')

@vite(['public/css/cart.css'])

@section('content')
<div class="cart-container">
    <h1>Ostukorv</h1>

    @if(!empty($cart) && count($cart) > 0)
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Toode</th>
                    <th>Hind</th>
                    <th>Kogus</th>
                    <th>Kokku</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $id => $item)
                    @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                    <tr>
                        <td class="cart-item">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                            <span>{{ $item['name'] }}</span>
                        </td>
                        <td>€{{ number_format($item['price'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.update', $id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                <button type="submit">Uuenda</button>
                            </form>
                        </td>
                        <td>€{{ number_format($subtotal, 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="remove-btn">❌</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="cart-total">
            <h2>Kogusumma: €{{ number_format($total, 2) }}</h2>
        </div>

        <div class="cart-actions">
            <a href="{{ route('products') }}" class="btn continue-shopping">Jätka ostlemist</a>
            <a href="{{ route('checkout') }}" class="btn checkout-btn">Mine maksma</a>
        </div>
    @else
        <p>Ostukorv on tühi.</p>
        <a href="{{ route('products') }}" class="btn continue-shopping">Tagasi poodi</a>
    @endif
</div>
@endsection
