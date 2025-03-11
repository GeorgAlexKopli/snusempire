<link href="{{ asset('css/components/navbar.css') }}" rel="stylesheet">

<header class="sticky-header">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('img/logo-dark.webp') }}" alt="Snus Empire Logo">
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="/">E-Pood</a></li>
                <li><a href="{{ route('products') }}">Tooted</a></li>
                <li><a href="/kontakt">Kontakt</a></li>
                <li><a href="/meist">Meist</a></li>
                <li><a href="/tule-toole">Tule tööle</a></li>
            </ul>
        </nav>

        <div class="search-bar">
            <form action="{{ route('search') }}" method="GET">
                <img class="search-icon" src="{{ asset('img/searchbar.png') }}" alt="Search">
                <input type="text" name="query" placeholder="Otsi tooteid" class="search-input hidden">
            </form>
        </div>

        <!-- Cart Button -->
        <div class="cart-section">
            @php
                $cart = session('cart', []);
                $cartItemCount = array_sum(array_column($cart, 'quantity'));
            @endphp
            <a href="{{ route('cart.index') }}" class="cart-button">
                🛒 <span class="cart-count">{{ $cartItemCount }}</span>
            </a>
        </div>

        <div class="profile-section">
            @auth
                <span class="profile-name">Tere, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-btn">Logi välja</button>
                </form>
            @else
                <a href="{{ route('log-in') }}" class="login-link">Kliendikaart</a>
            @endauth
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.querySelector('.search-icon');
    const searchInput = document.querySelector('.search-input');

    function toggleSearchBar() {
        if (searchInput.classList.contains('visible')) {
            searchInput.classList.remove('visible');
            searchInput.classList.add('hidden');
            searchIcon.style.display = 'block';
        } else {
            searchInput.classList.add('visible');
            searchInput.classList.remove('hidden');
            searchInput.focus();
            searchIcon.style.display = 'none';
        }
    }

    searchIcon.addEventListener('click', function (event) {
        event.stopPropagation();
        toggleSearchBar();
    });

    document.addEventListener('click', function (event) {
        if (!searchInput.contains(event.target) && !searchIcon.contains(event.target)) {
            searchInput.classList.remove('visible');
            searchInput.classList.add('hidden');
            searchIcon.style.display = 'block';
        }
    });
});
</script>
