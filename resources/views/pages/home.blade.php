<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Kodu</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Header -->
    <x-navbar />

    <!-- Populaarsed Tooted Section -->
    <section class="populaarsed-tooted">
    <h2>Populaarsed tooted</h2>
        <div class="container">
            
        <div class="tooted-item">
        <img src="{{ asset('/img/killa-blueberry-10g-643e76150180b.webp') }}" alt="Toode 1">
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
                <img src="{{ asset('/img/pablo-ice-cold-10g-643e7c7cb9b6c.webp') }}" alt="Toode 2">
                <div class=product-info>
                <div class="strength-circles">
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                    <span class="circle filled"></span>
                </div>
                <p>Pablo Ice Cold 10g €5.49  </p>
                
                </div>
            </div>

        </div>
        <a href="/tooted" class="btn black-btn">Kõik tooted</a>
    </section>

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

    <!-- Product Categories Section -->
    <section class="product-categories">
    <div class="category-container">
        <div class="category-option">
            <a href="/nikotiinipadjad"><h3>Nikotiinipadjad</h3></a>
        </div>
        <div class="category-option">
            <a href="/e-sigaretid"><h3>E-sigaretid</h3></a>
        </div>
        <div class="category-option">
            <a href="/e-vedelikud"><h3>E-vedelikud</h3></a>
        </div>
    </div>

    <!-- Newsletter Section -->
<section class="newsletter">
    <h2>Liitu meie uudiskirjaga!</h2>
    <div class="container">
        <form action="#" method="post">
            <div class="input-container">
                <input type="email" name="email" placeholder="E-post">
                <button type="submit"><img src="{{ asset('img/send.png') }}" ></button>
            </div>
        </form>
    </div>
</section>

<x-footer/>
    
</body>
</html>
