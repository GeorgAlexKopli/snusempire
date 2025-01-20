<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Home</title>
    <!-- Include your CSS file -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">


</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Snus Empire Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Snus Empire</h1>
            <p>Your one-stop shop for premium snus products.</p>
            <a href="/products" class="btn">Shop Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="feature-item">
                <h3>Quality</h3>
                <p>We offer the best quality snus products in the market.</p>
            </div>
            <div class="feature-item">
                <h3>Fast Delivery</h3>
                <p>Get your orders delivered quickly and securely.</p>
            </div>
            <div class="feature-item">
                <h3>Great Prices</h3>
                <p>Enjoy the most competitive prices for your favorite products.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Snus Empire. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
