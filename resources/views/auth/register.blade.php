<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Registreeru</title>
    <link href="{{ asset('css/logi-sisse.css') }}" rel="stylesheet">
</head>
<body>
    <img src="{{ asset('/img/kliendikaart.png') }}" alt="Kliendikaart">
    
    <div class="login-container">
        <h2>Registreeru</h2>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="login-form" action="{{ route('register') }}" method="POST">
            @csrf
            
            <input type="text" id="name" name="name" placeholder="Nimi" value="{{ old('name') }}" required>
            <input type="email" id="email" name="email" placeholder="E-post" value="{{ old('email') }}" required>
            <input type="password" id="password" name="password" placeholder="Parool" required>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Kinnita parool" required>

            <div class="button-group">
                <button type="submit" class="register-btn">Loo konto</button>
            </div>

            <p>Kas sul on juba konto? <a href="{{ route('log-in') }}">Logi sisse</a></p>
        </form>

        <btn class="Back-btn"><a href="/home">Tagasi</a></btn>
    </div>
</body>
</html>
