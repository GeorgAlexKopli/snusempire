<header class="sticky-header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/logo-dark.webp') }}" alt="Snus Empire Logo">
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
    <style>
    .sticky-header {
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 13px 0;
}

.sticky-header .container {
    width: 100%;
    margin: 0 auto;
    max-width: 1800px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.logo img {
    width: 200px;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-size: 18px;
}

nav ul li a:hover {
    color: #0f4b6e;
}

.search-bar {
    position: relative;
}

.search-icon {
    width: 30px;
    height: 30px;
    cursor: pointer;
}


.search-input {
    width: 300px;
    right: 0;
    opacity: 0;
    visibility: hidden;
    background: white;
    border-radius: 15px;
    padding: 15px;
    font-size: 16px;
    z-index: 1000;
}

/* When search bar is visible */
.search-input.visible {
    opacity: 1;
    visibility: visible;
    
}

/* Hide input by default */
.hidden {
    display: none;
}

.shopping-bag-icon {
    width: 40px;
    height: auto;
    cursor: pointer;
}

.profile-section {
    display: flex;
    align-items: center;
    gap: 15px;
}

.profile-name {
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.logout-btn {
    background-color: #0f4b6e;
    color: white;
    border: none;
    padding: 8px 15px;
    font-size: 16px;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.logout-btn:hover {
    background-color:rgb(65, 114, 143);
}

.login-link {
    text-decoration: none;
    color: #0f4b6e;
    font-size: 18px;
    font-weight: 600;
}

.login-link:hover {
    text-decoration: underline;
}

.right-section {
    display: flex;
    align-items: center;
    gap: 0px; /* Reduced gap between elements */
}

    </style>