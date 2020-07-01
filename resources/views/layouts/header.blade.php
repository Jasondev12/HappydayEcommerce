<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="{{ asset('img/logo_HappyDay_137x50.pn') }}g" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                    <!-- Left Menu -->
                    <ul class="nav navbar-nav menu_nav mr-auto ml-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/home.svg') }}" alt="logo menu">
                                Menu
                            </a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('shop.index') }}" class="nav-link">
                                <img class="iconeHeader" src="{{ asset('../icones/shop.svg') }}" alt="logo boutique">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/contact2.svg') }}" alt="logo contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <!-- Right Menu -->
                    <ul class="nav navbar-nav menu_nav ml-auto">
                    <!-- if user not connected -->
                    @guest
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('register') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/signup.svg') }}" alt="logo inscription">
                                Inscription
                            </a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a class="nav-link" href="{{ route('login') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/login.svg') }}" alt="logo se connecter">
                                Se connecter
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('orders') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/orders.svg') }}" alt="logo commandes">
                                Commandes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/logout.svg') }}" alt="logo se déconnecter">
                                Se déconnecter
                            </a>
                        </li>
                    @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}">
                                <img class="iconeHeader" src="{{ asset('../icones/cart.svg') }}" alt="logo panier">
                                Panier
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->
