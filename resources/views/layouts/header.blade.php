<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="{{ asset('img/logo_HappyDay_137x50.pn') }}g" alt="logo happy day"></a>
                <!-- Language menu -->
                <ul id="flag-navbar" class="nav navbar-nav menu_nav mr-auto d-table">
                    <li id="item-navbar" class="nav-item">
                        <a id="french-nav" class="nav-link" href="{{ route('setlang', [ 'lang' => 'fr' ]) }}">
                            <img class="iconeHeader" src="{{ asset('../icones/fr.svg') }}" alt="logo français">
                        </a>
                    </li>
                    <li id="item-navbar" class="nav-item">
                        <a id="english-nav" class="nav-link" href="{{ route('setlang', [ 'lang' => 'en' ]) }}">
                            <img class="iconeHeader" src="{{ asset('../icones/uk.svg') }}" alt="logo anglais">
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <!-- Left Menu -->
                    <ul id="marginl-media" class="nav navbar-nav menu_nav mr-auto ml-4">
                        <li id="marginr-media" class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/home.svg') }}" alt="logo menu">
                                {{ __("Accueil") }}
                            </a>
                        </li>
                        <li id="marginr-media" class="nav-item submenu dropdown">
                            <a href="{{ route('shop.index') }}" class="nav-link">
                                <img class="iconeHeader" src="{{ asset('../icones/shop.svg') }}" alt="logo boutique">
                                {{ __("Boutique") }}
                            </a>
                        </li>
                        <li id="marginr-media" class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/contact2.svg') }}" alt="logo contact">
                                {{ __("Contact") }}
                            </a>
                        </li>
                    </ul>

                    <!-- Right Menu -->
                    <ul d="marginl-media" class="nav navbar-nav menu_nav ml-auto">
                        <!-- if user not connected -->
                        @guest
                        <li id="marginr-media" class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/signup.svg') }}" alt="logo inscription">
                                {{ __("Inscription") }}
                            </a>
                        </li>
                        <li id="marginr-media" class="nav-item submenu dropdown">
                            <a class="nav-link" href="{{ route('login') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/login.svg') }}" alt="logo se connecter">
                                {{ __("Connexion") }}
                            </a>
                        </li>
                        @else
                        <li id="marginr-media" class="nav-item">
                            <a class="nav-link" href="{{ route('orders') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/orders.svg') }}" alt="logo commandes">
                                {{ __("Commandes") }}
                            </a>
                        </li>
                        <li id="marginr-media" class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/logout.svg') }}" alt="logo se déconnecter">
                                {{ __("Déconnexion") }}
                            </a>
                        </li>
                        @endguest
                        <li id="marginr-media" class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/cart.svg') }}" alt="logo panier">
                                {{ __("Panier") }}
                                @if(Cart::instance('default')->count() > 0)
                                <span class="badge badge-primary">{{ Cart::instance('default')->count() }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->