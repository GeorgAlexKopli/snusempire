<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Kodu</title>
    <link href="{{ asset('css/logi-sisse.css') }}" rel="stylesheet">
</head>
<body>
    <img src="{{ asset('/img/kliendikaart.png') }}" alt="Kliendikaart">
    <div class="login-container">
    <form class="login-form" method="POST" action="{{ route('log-in.post') }}">
    @csrf
    <input type="email" id="email" name="email" placeholder="E-post" required>
    <input type="password" id="password" name="password" placeholder="Parool" required>
    
    <div class="button-group">
        <button type="submit" class="login-btn">LOGI SISSE</button>
        <button type="button" class="register-btn" onclick="window.location.href='{{ url('/register') }}'">
            REGISTREERU
        </button>
    </div>

    <a href="/forgot-password" class="forgot-password">Unustasid parooli?</a>
    </form>

        <btn class="Back-btn"><a href="/home">Tagasi</a></btn>
    </div>
</body>
</html>
