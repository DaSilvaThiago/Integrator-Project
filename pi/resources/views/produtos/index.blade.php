<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('images/favicon/favicon02.png.png') }}" rel="shortcut icon">
    <title>Charlie Streetwear</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="{{ asset('images/logo/logo.png') }}" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Header Wrapper ======-->
        <div class="header-wrapper">

            <!--====== Main Header ======-->
            <header class="header--style-3">

                <!--====== Nav 1 ======-->
                <nav class="primary-nav-wrapper">
                    <div class="container">

                        <!--====== Primary Nav ======-->
                        <div class="primary-nav">

                            <!--====== Main Logo ======-->

                            <a class="main-logo" href="index-3.html">

                                <img src="{{ asset('images/logo/logo.png') }}" alt=""></a>
                            <!--====== End - Main Logo ======-->


                            <!--====== Search Form ======-->
                            <form class="main-form">

                                <label for="main-search"></label>

                                <input class="input-text input-text--border-radius input-text--only-white"
                                    type="text" id="main-search" placeholder="Pesquisar">

                                <button class="btn btn--icon fas main-search-button" type="submit"><span
                                        class="material-icons">search</span></button>
                            </form>
                            <!--====== End - Search Form ======-->


                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation">

                                <button class="btn btn--icon toggle-button toggle-button--white fas fa-cogs"
                                    type="button"></button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                            title="Perfil">

                                            <a>
                                                <span class="material-icons">
                                                    account_circle
                                                </span></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:120px">
                                                <li>

                                                    <a href="dashboard.html"><i class="fi fi-sr-user"></i>

                                                        <span>Conta</span></a>
                                                </li>
                                                <li>

                                                    <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                        <span>Signup</span></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                                        <span>Signin</span></a>
                                                </li>
                                                <li>

                                                    <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                                        <span>Signout</span></a>
                                                </li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                            title="Configurações">

                                            <a><span class="material-icons">
                                                manage_accounts
                                            </span></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:120px">
                                                <li class="has-dropdown has-dropdown--ul-right-100">

                                                    <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                    <!--====== Dropdown ======-->

                                                    <span class="js-menu-toggle"></span>
                                                    <ul style="width:120px">
                                                        <li>

                                                            <a class="u-c-brand">ENGLISH</a>
                                                        </li>
                                                        <li>

                                                            <a>ARABIC</a>
                                                        </li>
                                                        <li>

                                                            <a>FRANCAIS</a>
                                                        </li>
                                                        <li>

                                                            <a>ESPANOL</a>
                                                        </li>
                                                    </ul>
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                                <li class="has-dropdown has-dropdown--ul-right-100">

                                                    <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                    <!--====== Dropdown ======-->

                                                    <span class="js-menu-toggle"></span>
                                                    <ul style="width:225px">
                                                        <li>

                                                            <a class="u-c-brand">$ - US DOLLAR</a>
                                                        </li>
                                                        <li>

                                                            <a>£ - BRITISH POUND STERLING</a>
                                                        </li>
                                                        <li>

                                                            <a>€ - EURO</a>
                                                        </li>
                                                    </ul>
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                            <a href="tel:+0900901904"><span class="material-icons">
                                                perm_phone_msg
                                                </span></a>
                                        </li>
                                        <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                            <a href="mailto:contact@domain.com"><span class="material-icons">
                                                email
                                                </span></a>
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->
                        </div>
                        <!--====== End - Primary Nav ======-->
                    </div>
                </nav>
                <!--====== End - Nav 1 ======-->


                <!--====== Nav 2 ======-->
                <nav class="secondary-nav-wrapper">
                    <div class="container">

                        <!--====== Secondary Nav ======-->
                        <div class="secondary-nav">

                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation1">

                                <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul class="ah-list">
                                        <li class="has-dropdown">

                                            <span class="mega-text">MENU</span>

                                            <!--====== Mega Menu ======-->

                                            <span class="js-menu-toggle"></span>
                                            <div class="mega-menu">
                                                <div class="mega-menu-wrap">
                                                    <div class="mega-menu-list">
                                                        <ul>
                                                            <li class="js-active">

                                                                <a href="shop-side-version-2.html"><i
                                                                        class="fas fa-tv u-s-m-r-6"></i>

                                                                    <span>CAMISETAS</span></a>

                                                                <span class="js-menu-toggle js-toggle-mark"></span>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html"><i
                                                                        class="fas fa-female u-s-m-r-6"></i>

                                                                    <span>MOLETONS</span></a>

                                                                <span class="js-menu-toggle"></span>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html"><i
                                                                        class="fas fa-male u-s-m-r-6"></i>

                                                                    <span>BONÉ</span></a>

                                                                <span class="js-menu-toggle"></span>
                                                            </li>
                                                            <li>

                                                                <a href="index-3.html"><i
                                                                        class="fas fa-utensils u-s-m-r-6"></i>

                                                                    <span>BERMUDAS</span></a>

                                                                <span class="js-menu-toggle"></span>
                                                            </li>
                                                            <li>

                                                                <a href="index-3.html"><i
                                                                        class="fas fa-couch u-s-m-r-6"></i>

                                                                    <span>TENIS</span></a>

                                                                <span class="js-menu-toggle"></span>
                                                            </li>
                                                            <li>

                                                                <a href="index-3.html"><i
                                                                        class="fas fa-football-ball u-s-m-r-6"></i>

                                                                    <span>CALÇAS</span></a>

                                                                <span class="js-menu-toggle"></span>
                                                            </li>
                                                            <li>

                                                                <a href="index-3.html"><i
                                                                        class="fas fa-heartbeat u-s-m-r-6"></i>

                                                                    <span>INTIMOS</span></a>

                                                                <span class="js-menu-toggle"></span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!--====== Electronics ======-->
                                                    <div class="mega-menu-content js-active">

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">3D PRINTER &
                                                                            SUPPLIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d
                                                                            Printer</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printing
                                                                            Pen</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printing
                                                                            Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printer
                                                                            Module Board</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">HOME AUDIO &
                                                                            VIDEO</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">TV Boxes</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">TC Receiver
                                                                            & Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Display
                                                                            Dongle</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Home Theater
                                                                            System</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">MEDIA
                                                                            PLAYERS</a>
                                                                    </li>
                                                                    <li>

                                                                        <a
                                                                            href="shop-side-version-2.html">Earphones</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Mp3
                                                                            Players</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Speakers &
                                                                            Radios</a>
                                                                    </li>
                                                                    <li>

                                                                        <a
                                                                            href="shop-side-version-2.html">Microphones</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">VIDEO GAME
                                                                            ACCESSORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Nintendo
                                                                            Video Games Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sony Video
                                                                            Games Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Xbox Video
                                                                            Games Accessories</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">SECURITY &
                                                                            PROTECTION</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Security
                                                                            Cameras</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Alarm
                                                                            System</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Security
                                                                            Gadgets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">CCTV
                                                                            Security & Accessories</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">PHOTOGRAPHY
                                                                            & CAMERA</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Digital
                                                                            Cameras</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sport Camera
                                                                            & Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Camera
                                                                            Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Lenses &
                                                                            Accessories</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">ARDUINO
                                                                            COMPATIBLE</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Raspberry Pi
                                                                            & Orange Pi</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Module
                                                                            Board</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Smart
                                                                            Robot</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Board
                                                                            Kits</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">DSLR
                                                                            Camera</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Nikon
                                                                            Cameras</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Canon
                                                                            Camera</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sony
                                                                            Camera</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">DSLR
                                                                            Lenses</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">NECESSARY
                                                                            ACCESSORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Flash
                                                                            Cards</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Memory
                                                                            Cards</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Flash
                                                                            Pins</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Compact
                                                                            Discs</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-9 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-0.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                    </div>
                                                    <!--====== End - Electronics ======-->


                                                    <!--====== Women ======-->
                                                    <div class="mega-menu-content">

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-1.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-2.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">HOT
                                                                            CATEGORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Dresses</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Blouses &
                                                                            Shirts</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">T-shirts</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Rompers</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a
                                                                            href="shop-side-version-2.html">INTIMATES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Bras</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Brief
                                                                            Sets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Bustiers &
                                                                            Corsets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Panties</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">WEDDING &
                                                                            EVENTS</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Wedding
                                                                            Dresses</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Evening
                                                                            Dresses</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Prom
                                                                            Dresses</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Flower
                                                                            Dresses</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">BOTTOMS</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Skirts</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Shorts</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Leggings</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Jeans</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">OUTWEAR</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Blazers</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Basics
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Trench</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Leather &
                                                                            Suede</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">JACKETS</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Denim
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Trucker
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Windbreaker
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Leather
                                                                            Jackets</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a
                                                                            href="shop-side-version-2.html">ACCESSORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Tech
                                                                            Accessories</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Headwear</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Baseball
                                                                            Caps</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Belts</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">OTHER
                                                                            ACCESSORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Bags</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Wallets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Watches</a>
                                                                    </li>
                                                                    <li>

                                                                        <a
                                                                            href="shop-side-version-2.html">Sunglasses</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-9 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-3.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-4.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                    </div>
                                                    <!--====== End - Women ======-->


                                                    <!--====== Men ======-->
                                                    <div class="mega-menu-content">

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-4 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-5.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-6.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-7.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">HOT SALE</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">T-Shirts</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Tank
                                                                            Tops</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Polo</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Shirts</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">OUTWEAR</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Hoodies</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Trench</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Parkas</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sweaters</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">BOTTOMS</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Casual
                                                                            Pants</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Cargo
                                                                            Pants</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Jeans</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Shorts</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a
                                                                            href="shop-side-version-2.html">UNDERWEAR</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Boxers</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Briefs</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Robes</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Socks</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">JACKETS</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Denim
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Trucker
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Windbreaker
                                                                            Jackets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Leather
                                                                            Jackets</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a
                                                                            href="shop-side-version-2.html">SUNGLASSES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Pilot</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Wayfarer</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Square</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Round</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a
                                                                            href="shop-side-version-2.html">ACCESSORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Eyewear
                                                                            Frames</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Scarves</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Hats</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Belts</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">OTHER
                                                                            ACCESSORIES</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Bags</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Wallets</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Watches</a>
                                                                    </li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Tech
                                                                            Accessories</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-8.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block"
                                                                        href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block"
                                                                            src="images/banners/banner-mega-9.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                    </div>
                                                    <!--====== End - Men ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu ======-->
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->


                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation2">

                                <button class="btn btn--icon toggle-button toggle-button--white fas fa-cog"
                                    type="button"></button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul class="ah-list ah-list--design2 ah-list--link-color-white">
                                        <li>

                                            <a href="shop-side-version-2.html">HOMENS</a>
                                        </li>
                                        <li class="ah-list ah-list--design2 ah-list--link-color-white">

                                            <a href="shop-side-version-2.html">MULHERES</a>

                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="ah-list ah-list--design2 ah-list--link-color-white">

                                            <a href="shop-side-version-2.html">CRIANÇAS</a>

                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li>

                                            <a href="shop-side-version-2.html">MAIS COMPRADOS</a>
                                        </li>
                                        <li>

                                            <a href="shop-side-version-2.html">NOVOS</a>
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->


                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation3">

                                <button
                                    class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop"
                                    type="button"></button>

                                <span class="total-item-round">2</span>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                        <li>

                                            <a href="index-3.html"><span class="material-icons">
                                                home
                                                </span></a>
                                        </li>
                                        <li>

                                            <a href="wishlist.html"><span class="material-icons">
                                                favorite_border
                                                </span></a>
                                        </li>
                                        <li class="has-dropdown">

                                            <a class="mini-cart-shop-link"><span class="material-icons">
                                                shopping_bag
                                                </span>

                                                <span class="total-item-round">2</span></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <div class="mini-cart">

                                                <!--====== Mini Product Container ======-->
                                                <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link"
                                                                    href="product-detail.html">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a
                                                                        href="shop-side-version-2.html">Electronics</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">Yellow Wireless
                                                                        Headphone</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span>
                                                            </div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->


                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link"
                                                                    href="product-detail.html">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product18.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a
                                                                        href="shop-side-version-2.html">Electronics</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">Nikon DSLR Camera
                                                                        4k</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span>
                                                            </div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->


                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link"
                                                                    href="product-detail.html">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/women/product8.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a href="shop-side-version-2.html">Women
                                                                        Clothing</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">New Dress D Nice
                                                                        Elegant</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span>
                                                            </div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->


                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link"
                                                                    href="product-detail.html">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/men/product8.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a href="shop-side-version-2.html">Men
                                                                        Clothing</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">New Fashion D Nice
                                                                        Elegant</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span>
                                                            </div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->
                                                </div>
                                                <!--====== End - Mini Product Container ======-->


                                                <!--====== Mini Product Statistics ======-->
                                                <div class="mini-product-stat">
                                                    <div class="mini-total">

                                                        <span class="subtotal-text">SUBTOTAL</span>

                                                        <span class="subtotal-value">$16</span>
                                                    </div>
                                                    <div class="mini-action">

                                                        <a class="mini-link btn--e-brand-b-2"
                                                            href="checkout.html">PROCEED TO CHECKOUT</a>

                                                        <a class="mini-link btn--e-transparent-secondary-b-2"
                                                            href="cart.html">VIEW CART</a>
                                                    </div>
                                                </div>
                                                <!--====== End - Mini Product Statistics ======-->
                                            </div>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->
                        </div>
                        <!--====== End - Secondary Nav ======-->
                    </div>
                </nav>
                <!--====== End - Nav 2 ======-->
            </header>
            <!--====== End - Main Header ======-->
        </div>
        <!--====== End - Header Wrapper ======-->


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-640 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-3" id="hero-slider">
                    <div class="hero-slide hero-slide--7">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white">Atualize-se na Moda</span>

                                            <span class="content-span-2 u-c-white">10% de desconto</span>

                                            <span class="content-span-3 u-c-white">Em peças selecionadas de camisa feminina</span>

                                            <span class="content-span-4 u-c-white">Apartir de

                                                <span class="u-c-brand">R$99.90</span></span>

                                            <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--8">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white">Abra os olhos</span>

                                            <span class="content-span-2 u-c-white">10% off para Moletons</span>

                                            <span class="content-span-3 u-c-white">Encontre aqui os melhores preços</span>

                                            <span class="content-span-4 u-c-white">Apartir de

                                                <span class="u-c-brand">R$180.00</span></span>

                                            <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--9">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white">Encontre as melhores marcas</span>

                                            <span class="content-span-2 u-c-white">Marcas selecionadas</span>

                                            <span class="content-span-3 u-c-white">Venha conferir produtos da moda jovem</span>

                                            <span class="content-span-4 u-c-white">Adiquira já

                                            <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">VER MAIS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->


            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="promotion-o">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img" src="{{asset('images/section1/1.jpg')}}" alt="">
                                    </div>
                                    <div class="promotion-o__content">

                                        <a class="promotion-o__link btn--e-white-brand"
                                            href="shop-side-version-2.html">Roupas de Mulher</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="promotion-o">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img" src="{{asset('images/section1/2.jpg')}}" alt="">
                                    </div>
                                    <div class="promotion-o__content">

                                        <a class="promotion-o__link btn--e-white-brand"
                                            href="shop-side-version-2.html">Acessórios</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="promotion-o">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img" src="{{asset('images/section1/3.jpg')}}" alt="">
                                    </div>
                                    <div class="promotion-o__content">

                                        <a class="promotion-o__link btn--e-white-brand"
                                            href="shop-side-version-2.html">Roupas de Homem</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">

                                    <a class="i3-banner" href="shop-side-version-2.html">
                                        <div class="aspect aspect--bg-grey-fb aspect--square">

                                            <img class="aspect__img i3-banner__img"
                                                src="images/banners/i3-banner-1.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 u-s-m-b-30">
                                            <div class="product-short u-h-100">
                                                <div class="product-short__container">
                                                    <div class="product-short__img-wrap">

                                                        <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img product-short__img"
                                                                src="images/product/women/product14.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product-short__info">

                                                        <span class="product-short__price">$126.77</span>

                                                        <span class="product-short__name">

                                                            <a href="product-detail.html">Women Shoes</a></span>

                                                        <span class="product-short__category">

                                                            <a href="shop-side-version-2.html">Women
                                                                Clothing</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 u-s-m-b-30">
                                            <div class="product-short u-h-100">
                                                <div class="product-short__container">
                                                    <div class="product-short__img-wrap">

                                                        <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img product-short__img"
                                                                src="images/product/men/product12.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product-short__info">

                                                        <span class="product-short__price">$126.77</span>

                                                        <span class="product-short__name">

                                                            <a href="product-detail.html">Men Leather Wallet</a></span>

                                                        <span class="product-short__category">

                                                            <a href="shop-side-version-2.html">Men Clothing</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">

                                            <a class="i3-banner" href="shop-side-version-2.html">
                                                <div class="aspect aspect--bg-grey-fb aspect--1048-334">

                                                    <img class="aspect__img i3-banner__img"
                                                        src="images/banners/i3-banner-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->


            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">RECENT PRODUCTS</h1>

                                    <span class="section__span u-c-silver">NEWLY ADDED PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/women/product5.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Dress A Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/women/product6.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Dress B Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/women/product7.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Dress C Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/women/product8.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/men/product5.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Men Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Fashion A Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/men/product6.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Men Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Fashion B Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/men/product7.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Men Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Fashion C Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/men/product8.jpg"
                                                alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">Men Clothing</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                            <span class="product-r__price">$125.00</span>
                                        </div>

                                        <span class="product-r__description">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->


            <!--====== Section 4 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">BEST SELLING PRODUCT</h1>

                                    <span class="section__span u-c-silver u-s-m-b-16">FIND PRODUCTS THAT ARE MOST
                                        SELLING</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="filter-category-container">
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2 js-checked" type="button"
                                            data-filter="*">ALL</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button"
                                            data-filter=".outwear">OUTWEAR</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button"
                                            data-filter=".bottom">BOTTOM</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button"
                                            data-filter=".footwear">FOOTWEAR</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button"
                                            data-filter=".accessories">ACCESSORIES</button>
                                    </div>
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30">
                                    <div class="row">
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item outwear">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/men/product11.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Black &amp; White
                                                            Sweater</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item outwear">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/women/product15.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Color Yellow Modest A
                                                            Fashion</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item bottom">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/men/product2.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">White Full Men
                                                            Underwear</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item bottom">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/women/product3.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Color Yellow Modest B
                                                            Fashion</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item accessories">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/men/product3.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Blown Sunglasses For
                                                            Deux</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item accessories">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/women/product4.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Ladies Black Bag</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item footwear">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/men/product13.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Casual Shoes
                                                            Independence</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item footwear">
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img"
                                                                src="images/product/men/product14.jpg"
                                                                alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#quick-look"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal"
                                                                        data-modal-id="#add-to-cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">Men Casual Shoes
                                                            Charcoal</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span>
                                                    </div>

                                                    <span class="product-bs__price">$125.00

                                                        <span class="product-bs__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="load-more">

                                    <button class="btn btn--e-brand" type="button">Load More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 4 ======-->


            <!--====== Section 5 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">URBAN SOUL</h1>

                                    <span class="section__span u-c-silver">RECENTLY URBAN PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-short u-h-100">
                                    <div class="product-short__container">
                                        <div class="product-short__img-wrap">

                                            <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                href="product-detail.html">

                                                <img class="aspect__img product-short__img"
                                                    src="images/product/women/product16.jpg" alt=""></a>
                                        </div>
                                        <div class="product-short__info">

                                            <span class="product-short__price">$126.77</span>

                                            <span class="product-short__name">

                                                <a href="product-detail.html">New Dress A Nice Elegant</a></span>

                                            <span class="product-short__category">

                                                <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-short u-h-100">
                                    <div class="product-short__container">
                                        <div class="product-short__img-wrap">

                                            <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                href="product-detail.html">

                                                <img class="aspect__img product-short__img"
                                                    src="images/product/women/product17.jpg" alt=""></a>
                                        </div>
                                        <div class="product-short__info">

                                            <span class="product-short__price">$126.77</span>

                                            <span class="product-short__name">

                                                <a href="product-detail.html">New Dress B Nice Elegant</a></span>

                                            <span class="product-short__category">

                                                <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-short u-h-100">
                                    <div class="product-short__container">
                                        <div class="product-short__img-wrap">

                                            <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                href="product-detail.html">

                                                <img class="aspect__img product-short__img"
                                                    src="images/product/women/product18.jpg" alt=""></a>
                                        </div>
                                        <div class="product-short__info">

                                            <span class="product-short__price">$126.77</span>

                                            <span class="product-short__name">

                                                <a href="product-detail.html">New Dress C Nice Elegant</a></span>

                                            <span class="product-short__category">

                                                <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-short u-h-100">
                                    <div class="product-short__container">
                                        <div class="product-short__img-wrap">

                                            <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                href="product-detail.html">

                                                <img class="aspect__img product-short__img"
                                                    src="images/product/women/product19.jpg" alt=""></a>
                                        </div>
                                        <div class="product-short__info">

                                            <span class="product-short__price">$126.77</span>

                                            <span class="product-short__name">

                                                <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                            <span class="product-short__category">

                                                <a href="shop-side-version-2.html">Women Clothing</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 5 ======-->


            <!--====== Section 6 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">SPECIAL
                                        PRODUCTS</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/men/product9.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Fashion A Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/men/product10.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Fashion B Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product9.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress A Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">WEEKLY
                                        PRODUCTS</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product10.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress B Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00

                                                        <span class="product-l__discount">$160</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product11.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress C Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00

                                                        <span class="product-l__discount">$160</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product12.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress D Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00

                                                        <span class="product-l__discount">$160</span></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">FLASH PRODUCTS</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product13.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">
                                                    <div class="product-l__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i></div>

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress E Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product1.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">
                                                    <div class="product-l__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i></div>

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Women intimate Bra</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product2.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">
                                                    <div class="product-l__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i></div>

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Women Wedding Event
                                                            Dress</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 6 ======-->


            <!--====== Section 7 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">

                        <!--====== Brand Slider ======-->
                        <div class="slider-fouc">
                            <div class="owl-carousel" id="brand-slider" data-item="5">
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="images/brand/b1.png" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="images/brand/b2.png" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="images/brand/b3.png" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="images/brand/b4.png" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="images/brand/b5.png" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="images/brand/b6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Brand Slider ======-->
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 7 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>4247 Ashford Drive Virginia VA-20006 USA</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+0) 900 901 904</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>contact@domain.com</span>
                                </div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>

                                                    <a href="dashboard.html">Account</a>
                                                </li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Manufacturer</a>
                                                </li>
                                                <li>

                                                    <a href="dash-payment-option.html">Finance</a>
                                                </li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Shop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Our Company</span>
                                            <ul>
                                                <li>

                                                    <a href="about.html">About us</a>
                                                </li>
                                                <li>

                                                    <a href="contact.html">Contact Us</a>
                                                </li>
                                                <li>

                                                    <a href="index-3.html">Sitemap</a>
                                                </li>
                                                <li>

                                                    <a href="dash-my-order.html">Delivery</a>
                                                </li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Store</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text"
                                            id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn"
                                            type="submit">SUBSCRIBE</button>
                                    </div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                        promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2018</span>

                                    <a href="index-3.html">Reshop</a>

                                    <span>All Right Reserved</span>
                                </div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a>
                                        </li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a>
                                        </li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a>
                                        </li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span>
                                    </div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del
                                                class="pd-detail__del">$28.97</del>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book.</span>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i
                                                    class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i
                                                    class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i
                                                        class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input
                                                            class="input-counter__text input-counter--text-primary-style"
                                                            type="text" value="1" data-min="1"
                                                            data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span>
                                                    </div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span>
                                            </li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span>
                                            </li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span>
                                    </div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg"
                                            alt="">
                                    </div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow"
                                            data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW
                                            CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED
                                            TO CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->
        <div class="modal fade new-l" id="newsletter-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn new-l__dismiss fas " type="button" data-dismiss="modal"><span class="material-icons">
                        close
                        </span></button>
                    <div class="modal-body">
                        <div class="row u-s-m-x-0">
                            <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                                <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.html">

                                    <img class="u-img-fluid u-d-block" src="{{asset('images/newsletter/newsletter.jpg')}}"
                                        alt=""></a>
                            </div>
                            <div class="col-lg-6 new-l__col-2">
                                <div class="new-l__section u-s-m-t-30">
                                    <div class="u-s-m-b-8 new-l--center">
                                        <h3 class="new-l__h3">Newsletter</h3>
                                    </div>
                                    <div class="u-s-m-b-30 new-l--center">
                                        <p class="new-l__p1">Registre um email para receber ofertas e notícias sobre nós.</p>
                                    </div>
                                    <form class="new-l__form">
                                        <div class="u-s-m-b-15">

                                            <input class="news-l__input" type="text"
                                                placeholder="E-mail">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Registrar!</button>
                                        </div>
                                    </form>
                                    <div class="u-s-m-b-15 new-l--center">
                                        <p class="new-l__p2">Ao cadastrar você recebe novas ofertas, cupons, <br />Promoções e outras propostas comerciais. Você pode se inscrever a qualquer momento.</p>
                                    </div>
                                    <div class="u-s-m-b-15 new-l--center">

                                        <a class="new-l__link" data-dismiss="modal">Não Obrigado</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>

</html>
