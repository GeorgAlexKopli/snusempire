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
            <div class="search-bar">
                <img class="search-icon" src="{{ asset('img/searchbar.png') }}" alt="Search">
                    <input type="text" placeholder="Otsi tooteid" class="search-input hidden">
            </div>
            <div class="shopping-bag">
                <img src="{{ asset('img/shopping-bag.svg') }}" alt="Shopping Bag">
            </div>
        </div>
    </header>

    

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
            <h3>E-Sigaretid Killalt</h3>
            <p>Killa Switch on mugav ja kompaktne ühekordseks kasutamiseks mõeldud e-sigaret. Seda on lihtne kasutada ning ei vaja täitmist ega laadimist. Killa Switch seadmed on valmistatud kõrge kvaliteediga komponentidest ning sisaldab parimate omadustega nikotiinivedelikku.</p>
            <img src="{{ asset('/img/killa-switch.png') }}" alt="Killa Switch">
        </div>
        <div class="e-vedelikud">
            <img src="{{ asset('/img/e-vedelik.webp') }}" alt="E-vedelik">
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
            <h4>KIIRLINGID</h4>
            <ul style="list-style-type: none; padding: 0;">
                <li><a href="#" style="color: white; text-decoration: none;">Tooted</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Müügikohad</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Kontakt</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Tule tööle</a></li>
            </ul>
        </div>
        <!-- Column 3 -->
        <div class="footer-column">
            <h4>JURIIDILINE INFO</h4>
            <ul style="list-style-type: none; padding: 0;">
                <li><a href="#" style="color: white; text-decoration: none;">Andmekaitsetingimused</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Nõusoleku eelistused</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Müügitingimused</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Jälgimisseadmete privaatsusteade</a></li>
            </ul>
        </div>
        <!-- Column 4 -->
        <div class="footer-column">
            <h4>KONTAKT</h4>
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
</body>
</html>
