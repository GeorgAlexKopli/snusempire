<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snus Empire - Kodu</title>
    <!-- Include your CSS file -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
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
                    <li><a href="/kliendikaart">Kliendikaart</a></li>
                </ul>
            </nav>
            <div class="shopping-bag">
                <img src="{{ asset('img/shopping-bag.svg') }}" alt="Shopping Bag">
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tere tulemast Snus Empire'i</h1>
            <p>Teie usaldusväärne koht premium snusi toodete jaoks.</p>
            <a href="/tooted" class="btn">Osta nüüd</a>
        </div>
    </section>

    <!-- Populaarsed Tooted Section -->
    <section class="populaarsed-tooted">
        <div class="container">
            <h2>Populaarsed tooted</h2>
            <div class="tooted-item">
                <img src="{{ asset('/img/killa-blueberry-10g-643e76150180b.webp') }}" alt="Toode 1">
                <p>Killa Blueberry 10mg - €4.99</p>
            </div>
            <div class="tooted-item">
                <img src="{{ asset('/img/pablo-ice-cold-10g-643e7c7cb9b6c.webp') }}" alt="Toode 2">
                <p>Pablo Ice Cold 10g - €5.49</p>
            </div>
           
            
        </div>
        <a href="/tooted" class="btn black-btn">Kõik tooted</a>
    </section>

    <section class="products-info">
    <div class="container">
        <h2>Meie tooted</h2>
        
        <div class="product-info-item">
            <h3>Tubakavabad Nikotiinipadjad</h3>
            <p>
                Tubakavabad nikotiinipadjad on valge värvusega, nikotiini sisaldavad tooted, mis asetatakse huule alla.
                Nende kasutamine ei kahjusta hambaid ning sellega ei kaasne ebameeldivat tubakalõhna. Tooted sisaldavad 
                looduslikke õlisid, mis teevad kasutamise meeldivaks.
            </p>
            <ul>
                <li>Ei sisalda tubakat</li>
                <li>Valmistatud 100% looduslikest koostisosadest</li>
                <li>Valgest paberriidest puhtaim võimalus nikotiini tarbimiseks</li>
            </ul>
        </div>

        <div class="product-info-item">
            <h3>Nikotiinipadjad</h3>
            <p>
                Ühekordsed nikotiinipadjad, mis pakuvad mugavat ja lihtsat nikotiini tarbimist. Ei vaja erilist ettevalmistust
                ning on ideaalne valik igapäevaseks kasutamiseks.
            </p>
        </div>

        <div class="product-info-item">
            <h3>E-Sigaretid Killalt</h3>
            <p>
                Killa Switch on mugav ja kompaktne ühekordseks kasutamiseks mõeldud e-sigaret. Seda on lihtne kasutada 
                ning ei vaja täitmist ega laadimist. Killa Switch seadmed on valmistatud kõrge kvaliteediga komponentidest 
                ning sisaldavad parimate omadustega nikotiinivedelikku.
            </p>
        </div>

        <div class="product-info-item">
            <h3>Erinevad E-Vedelikud E-Sigaretidele</h3>
            <p>
                E-vedelikud sobivad e-sigareti täitmiseks. Vedelikud sisaldavad nikotiini ja on erinevate tubaka ning mündi
                maitsetega. Müügil on kolme erineva nikotiini sisaldusega vedelikud, mis on heaks alternatiiviks tavasigarettidele.
                Vedelikud on kõrge kvaliteediga ja täielikult tubakavabad.
            </p>
        </div>
    </div>
    </section>
    <!-- Product Categories Section -->
    <<section class="product-categories">
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

        
        
    </section>

    <!-- Footer -->
    <footer>
    <div class="footer-content" style="display: flex; justify-content: space-between; max-width: 1800px; margin: 0 auto; padding: 20px; color: white;">
        <!-- Column 1 -->
        <div class="footer-column">
        <img src="{{ asset('img/logo.webp') }}" alt="Footer Logo">
            <p>S.W.P. DISTRIBUTION OÜ on Snus <br> Empire kaubamärgi volitatud <br> esindaja regioonis ja toodete <br> edasimüüja.</p>
        </div>
        <!-- Column 2 -->
        <div class="footer-column">
            <h4>Kiirlingid</h4>
            <ul style="list-style-type: none; padding: 0;">
                <li><a href="#" style="color: white; text-decoration: none;">Tooted</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Müügikohad</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Kontakt</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Tule tööle</a></li>
            </ul>
        </div>
        <!-- Column 3 -->
        <div class="footer-column">
            <h4>Juriidiline info</h4>
            <ul style="list-style-type: none; padding: 0;">
                <li><a href="#" style="color: white; text-decoration: none;">Andmekaitsetingimused</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Nõusoleku eelistused</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Müügitingimused</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Jälgimisseadmete privaatsusteade</a></li>
            </ul>
        </div>
        <!-- Column 4 -->
        <div class="footer-column">
            <h4>Kontakt</h4>
            <p>Tel: +372 51978233</p>
            <p>E-post: <a href="mailto:info@snusempire.ee" style="color: white; text-decoration: none;">info@snusempire.ee</a></p>
        </div>
        <!-- Column 5 -->
        <div class="footer-column">
            <h4>S.W.P. DISTRIBUTION OÜ</h4>
            <p>Pärnu mnt 18-1</p>
            <p>Tallinn 10141, Eesti</p>
            <p>Reg kood: 14669735</p>
            <p>KMKR: EE102142141</p>
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px; color: white; font-size: 0.9em;">
        <p>© S.W.P DISTRIBUTION OÜ 2025. KÕIK ÕIGUSED RESERVEERITUD. VEEBIPLATFORM: PROCOMMERCE</p>
    </div>
</footer>

</body>
</html>
