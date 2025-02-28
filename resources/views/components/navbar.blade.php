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
                <li><a href="/tooted">Tooted</a></li>
                <li><a href="/kontakt">Kontakt</a></li>
                <li><a href="/meist">Meist</a></li>
                <li><a href="/tule-toole">Tule tööle</a></li>
                
            </ul>
        </nav>
        <div class="search-bar">
            <img class="search-icon" src="{{ asset('img/searchbar.png') }}" alt="Search">
            <input type="text" placeholder="Otsi tooteid" class="search-input hidden">
        </div>
        <img class="shopping-bag-icon" src="{{ asset('img/shopping-bag.svg') }}" alt="Shopping Bag">
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
            searchIcon.style.display = 'block'; // Show search icon when closing
        } else {
            searchInput.classList.add('visible');
            searchInput.classList.remove('hidden');
            searchInput.focus();
            searchIcon.style.display = 'none'; // Hide search icon when opening
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
            searchIcon.style.display = 'block'; // Show search icon when clicking outside
        }
    });
});

    </script>
