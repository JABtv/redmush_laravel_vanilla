<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> RedMush </title>

    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<header>
    <h1 >RedMush</h1>
    <nav>
        <ul>

            <x-linkItem class="text-5xl"  href="/" :active="Route::currentRouteName() === 'home' ? true : false" >Home</x-linkItem>
            <x-linkItem href="/signin" :active="Route::currentRouteName() === 'signin' ? true : false">SignIn</x-linkItem>

        </ul>
    </nav>
</header>

{{$slot}}

<nav class="navFooter">
    <ul class="navList">
        <li class="navItems">
            <a href="#">ACCUEIL</a>
        </li>
        <x-linkItem  href="/homme">HOMME</x-linkItem>
        <li class="navItems">
            <a href="#">FEMME</a>
        </li>
        <li class="navItems">
            <a href="#">ENFANT</a>
        </li>
        <li class="navItems">
            <a href="#">ACCESSOIRES</a>
        </li>
        <li class="navItems">
            <a href="#">NOUVEAUTÉS</a>
        </li>
        <li class="navItems">
            <a href="#">PROMO</a>
        </li>
        <li class="navItems">
            <a href="#">CAPSULE</a>
        </li>
    </ul>
</nav>
<footer id="desktop">
    <section class="info">
        <h3>Info Pratique</h3>
        <ul>
            <li>
                <a href="#">F.A.Q</a>
            </li>
            <li>
                <a href="#">Aide</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="#">Mention légal / CGV</a>
            </li>
        </ul>
    </section>
    <section class="resaux">
        <h3>Nos Résaux</h3>
        <a href="#">
            <img src="public/assets/images/icons/white/Instagram.png" alt="Lien vers la page Instagram du site.">
        </a>
        <a href="#">
            <img src="public/assets/images/icons/white/tiktok.png" alt="Lien vers la page TikTok du site.">
        </a>
        <a href="#">
            <img src="public/assets/images/icons/white/logo-youtube.png" alt="Lien vers la page Youtube du site.">
        </a>
    </section>
    <section class="newsletter">
        <h3>S'abonner a la newsletter</h3>
        <form action="" method="">
            <input type="email" name="newsltter" placeholder="E-mail">
            <button>S'ABONNER</button>
        </form>
    </section>
    <section class="right">
        <div>
            <img src="public/assets/images/icons/white/delivery.png" alt="Icon de livraison"/>
            <p>Livraison<br>3-5 jour*</p>
        </div>
        <div>
            <img src="public/assets/images/icons/white/secureCard.png" alt="Icon de payment"/>
            <p>Paiement<br>Sécurisée</p>
        </div>
    </section>
</footer>


<footer id="mobile">
    <section id="reseaux">
        <div class="reseaux">
            <a href="#">
                <img src="public/assets/images/icons/black/iconInstagram.png" alt="Lien vers la page Instagram du site.">
            </a>
            <a href="#">
                <img src="public/assets/images/icons/black/iconTiktok.png" alt="Lien vers la page TikTok du site.">
            </a>
            <a href="#">
                <img src="public/assets/images/icons/black/iconYoutube.png" alt="Lien vers la page Youtube du site.">
            </a>
        </div>
        <div class="icon">
            <img src="public/assets/images/icons/black/iconDelivery.png" alt="Lien vers la page Instagram du site.">
            <img src="public/assets/images/icons/black/secureCard.png" alt="Lien vers la page Instagram du site.">
        </div>
    </section>
    <section class="info">
        <h2>Info Pratique</h2>
        <ul>
            <li>
                <a href="#">F.A.Q</a>
            </li>
            <li>
                <a href="#">Aide</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Mention légale / CGV</a>
            </li>
        </ul>
    </section>
    <h3>contact@redmush.fr</h3>
    <section class="newsletter">
        <h2>S'abonner a la newsletter</h2>
        <img src="public/assets/images/icons/white/mail_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.png" alt="Icon de la newsletter"/>
        <form action="" method="">
            <input type="email" name="newsltter" placeholder="E-mail">
            <button>S'ABONNER</button>
        </form>
    </section>
</footer>
</body>
</html>
