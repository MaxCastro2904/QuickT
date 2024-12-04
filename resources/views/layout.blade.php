<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>

<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- title -->
<title>@yield('titulo')</title>

<!-- favicon -->
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/carrito.png') }}">
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- fontawesome -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
<!-- owl carousel -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<!-- magnific popup -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<!-- animate css -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!-- mean menu css -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<!-- main style -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<!-- responsive -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="https://kit.fontawesome.com/5ee5a0fe50.js" crossorigin="anonymous"></script>

@vite(['resources/js/app.js'])


    @yield('css')


</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area boton" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/chavez 3.png') }}" alt="" height="50px"
                                    width="200px">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home<i class="fa-regular fa-circle-check"></i></a></li>
                                <li><a href="verduras">Frutas y verduras</a></li>

                                <li><a href="bebidas">Bebidas</a>
                                </li>
                                <li><a href="licores">Licores</a></li>
                                <!--<li><a href="shop">Tienda</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop">Tienda</a></li>
                                        <li><a href="checkout">Verificar</a></li>
                                        <li><a href="cart">Carrito</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="comidas">Comidas</a></li>
                                <li><a href="#">Categorias</a>
                                    <ul class="sub-menu">
                                        <li><a href="abarrotes">Abarrotes</a></li>
                                        <li><a href="bebidas">Bebidas</a></li>
                                        <li><a href="licores">Licores</a></li>
                                        <li><a href="comidas">Comidas</a></li>
                                        <li><a href="embutidos">Embutidos</a></li>
                                        <li><a href="higiene">Higiene</a></li>
                                        <li><a href="verduras">Frutas y verduras</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <div id="app">
                                        <nav class="navbar navbar-expand-md">
                                            <ul class="navbar-nav ms-auto">
                                                <!-- Authentication Links -->
                                                @guest
                                                    @if (Route::has('login'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                    @endif

                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                            href="#" role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }}
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item text-black-50"
                                                                href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                Cerrar Sesión
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                                @endguest
                                            </ul>
                                        </nav>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-icons collapse navbar-collapse" id="navbarSupportedContent">
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="badge badge-pill badge-dark">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        {{ \Cart::getTotalQuantity() }}
                                                    </span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="navbarDropdown"
                                                    style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                                    <ul class="list-group" style="margin: 20px;">
                                                        @include('partials.cart-drop')
                                                    </ul>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>
                                </li>

                            </ul>
                        </nav>


                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    @yield('content')
    <!-- logo carousel -->
    <div class="logo-carousel-section boton">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">


                            <img src="{{ asset('assets/img/company-logos/autonoma.png') }}" alt="">

                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/php.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/mysql.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/laravel.png') }}" alt=""
                                height="90px">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('assets/img/company-logos/vsc.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->

    <!-- footer -->
    <div class="footer-area boton">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">Sobre nosotros</h2>
                        <p>Nuestro propósito es ser la cadena con mayor cantidad de puntos de venta, para que todos los
                            peruanos encuentren los productos de primera necesidad cerca a su hogar y a los mejores
                            precios.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Ponerse en contacto</h2>
                        <ul>
                            <li>contacto@ElChavez.com</li>
                            <li>+51 915015914</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Paginas</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="about">Nosotros</a></li>
                            <li><a href="shop">Tienda</a></li>
                            <li><a href="news">Noticias</a></li>
                            <li><a href="contact">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Suscripción</h2>
                        <p>Suscríbase a nuestra lista de correo para recibir las últimas actualizaciones.</p>
                        <form action="index">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright boton">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2022 - All Rights Reserved

                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('assets/js/sticker.js') }}"></script>
    <!-- form validation js -->
    <script src="{{ asset('assets/js/form-validate.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>

</html>
