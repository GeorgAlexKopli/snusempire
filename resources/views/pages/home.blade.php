<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Kodu</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
    <!-- Header -->
    <x-navbar />

    <section class="populaarsed-tooted">
    <h2>Populaarsed tooted</h2>
    <div class="container">
        
        <div class="tooted-item">
        <a href="{{ route('products', ['popular' => 1]) }}">

                <img src="{{ asset('/img/killa-blueberry-10g-643e76150180b.webp') }}" alt="Toode 1">
            </a>
            <div class="product-info">
                <div class="strength-circles">
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle"></span>
                    <span class="circle"></span>
                    <span class="circle"></span>
                </div>
                <p>Killa Blueberry 10g  €4.99</p>
            </div>
        </div>

        <div class="tooted-item">
        <a href="{{ route('products', ['popular' => 1]) }}">

                <img src="{{ asset('/img/pablo-ice-cold-10g-643e7c7cb9b6c.webp') }}" alt="Toode 2">
            </a>
            <div class="product-info">
                <div class="strength-circles">
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                </div>
                <p>Pablo Ice Cold 10g €5.49</p>
            </div>
        </div>

    </div>

    <a href="{{ route('products') }}" class="btn black-btn">Kõik tooted</a>
</section>


    <x-map />

<!-- About Product Section -->
<section class="about-product">
    <img class="curve" src="{{ asset('/img/curve.svg') }}" alt="Curve">
<div class="products">
    <div class="nikotiinipadjad">
        <div class="niko-text-images">
    <div class="nikotiinipadjad-content">
    <h1>TUBAKAVABAD</h1>
    <h2>Nikotiinipadjad</h2>
        <p>Tubakavabad nikotiinipadjad on valge värvusega, nikotiini sisaldavad tooted, mis asetatakse huule alla. Nende kasutamine ei kahjusta hambaid ning sellega ei kaasne ebameeldivat tubakalõhna. Tooted sisaldavad looduslikke õlisid, mis teevad kasutamise meeldivaks.</p>
    </div>
    <div class="picture-placeholders">
        <div class="placeholder-item">
            <img src="{{ asset('/img/leaf.svg') }}" alt="Leaf">
            <p>Ei sisalda tubakat</p>
        </div>
        <div class="placeholder-item">
            <img src="{{ asset('/img/plant.svg') }}" alt="Plant">
            <p>Valmistatud 100% looduslikest koostisosadest</p>
        </div>
        <div class="placeholder-item">
            <img src="{{ asset('/img/heart.svg') }}" alt="Heart">
            <p>Valgest paberriidest puhtaim võimalus nikotiini tarbimiseks</p>
        </div>
    </div>
    </div>
        <div class="big-picture-placeholder">
            <img src="{{ asset('/img/pablo-mini.webp') }}" alt="Pablo Snus">
        </div>
    </div>

    </div>

    <div class="product-info-container">
        <div class="e-sigaretid">
            <h1>ÜHEKORDSED</h1>
            <h3>E-Sigaretid Killalt</h3>
            <p>Killa Switch on mugav ja kompaktne ühekordseks kasutamiseks mõeldud e-sigaret. Seda on lihtne kasutada ning ei vaja täitmist ega laadimist. Killa Switch seadmed on valmistatud kõrge kvaliteediga komponentidest ning sisaldab parimate omadustega nikotiinivedelikku.</p>
            <img src="{{ asset('/img/killa-switch.png') }}" alt="Killa Switch">
        </div>
        <div class="e-vedelikud">
            <img src="{{ asset('/img/e-vedelik.webp') }}" alt="E-vedelik">
            <h1>E-SIGARETTIDELE</h1>
            <h3>ERINEVAD E-VEDELIKUD</h3>
            <p>E-vedelikud sobivad e-sigareti täitmiseks. Vedelikud sisaldavad nikotiini ja on erinevate tubaka ning mündi maitsetega. Müügil on kolme erineva nikotiini sisaldusega vedelikud mistõttu on need heaks alternatiiviks tavasigarettidele. Vedelikud on kõrge kvaliteediga ja täielikult tubakavabad.</p>
        </div>
    </div>
</div>
    </section>

<x-product-categories/>

<x-footer/>
    
</body>
</html>
