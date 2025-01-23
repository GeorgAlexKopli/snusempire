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
                    <li><a href="/logi-sisse">Kliendikaart</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <img class="search-icon" src="{{ asset('img/searchbar.png') }}" alt="Search">
                    <input type="text" placeholder="Otsi tooteid" class="search-input hidden">
            </div>
            <div class="shopping-bag">
                <img src="{{ asset('img/shopping-bag.svg') }}" alt="Shopping Bag">
            </div>
        </div>
    </header>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.querySelector('.search-icon');
    const searchInput = document.querySelector('.search-input');

    // Function to toggle the search bar visibility
    function toggleSearchBar() {
        searchInput.classList.toggle('visible');
        searchInput.classList.toggle('hidden');
        if (searchInput.classList.contains('visible')) {
            searchInput.focus();
        }
    }

    // Event listener for the search icon click
    searchIcon.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click from propagating to the document
        toggleSearchBar();
    });

    // Event listener for clicks outside the search bar
    document.addEventListener('click', function (event) {
        // Check if the search bar is visible and the click is outside the search area
        if (searchInput.classList.contains('visible') && !searchInput.contains(event.target) && !searchIcon.contains(event.target)) {
            searchInput.classList.remove('visible');
            searchInput.classList.add('hidden');
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
    height: 90px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
}

.sticky-header .container {
    width: 100%;
    margin: 0 auto;
    max-width: 1800px;
    display: flex;
    justify-content: space-between;
    align-items: center;
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

/* Style for the search icon */
.search-icon {
    width: 24px;
    height: 24px;
    cursor: pointer;
    transition: opacity 0.3s ease;
}

.search-input {
    position: absolute;
    left: 0;
    width: 1600px;
    opacity: 0;
    visibility: hidden;
    transition: width 0.3s ease, opacity 0.3s ease, visibility 0.3s;
}

/* Visible search input */
.search-input.visible {
    
    width: 1800px;
    opacity: 1;
    visibility: visible;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin: 0 ;
    font-size: 16px;
    z-index: 10;
}

/* Hide input by default */
.hidden {
    display: none;
}

    </style>