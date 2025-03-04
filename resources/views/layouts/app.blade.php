<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Search Results</title>

        <!-- Vite for styles -->
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <div class="min-h-screen bg-gray-100">
            <!-- Include Navbar component here -->
            <x-navbar />

            <!-- Main Content -->
            <main class="search-results-page">
                @yield('content')
            </main>
        </div>
    </body>
</html>
