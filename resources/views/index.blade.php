@extends('layout')
@section('titulo', 'El Chavez')
@section('content')






    <!-- home page slider -->
    <div class="homepage-slider">
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Aquí encontrarás</p>
                                <h1>Los mejores precios para todos tus productos</h1>
                                <div class="hero-btns">
                                    <a href="#Tienda" class="boxed-btn">Productos</a>
                                    <a href="contact" class="bordered-btn">Contacta con nosotros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">El Chavez te ofrece</p>
                                <h1>Los mejores productos en un solo lugar</h1>
                                <div class="hero-btns">
                                    <a href="#Tienda" class="boxed-btn">Visitar la tienda</a>
                                    <a href="contact" class="bordered-btn">Contacta con nosotros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">¡Mega promociones en marcha!</p>
                                <h1>Obtén los mejores descuentos de todo diciembre</h1>
                                <div class="hero-btns">
                                    <a href="#Tienda" class="boxed-btn">Visitar tienda</a>
                                    <a href="contact" class="bordered-btn">Contacta con nosotros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home page slider -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Envío gratis</h3>
                            <p>Cuando ordene más de S/75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Soporte</h3>
                            <p>Obtenga soporte todo el dia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Reembolso</h3>
                            <p>¡Obtenga un reembolso dentro de los 3 días!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- shop banner -->
    <section class="shop-banner">
        <div class="container">
            <h3>¡Llegó! <br> diciembre de <span class="orange-text">Descuentos...</span></h3>
            <div class="sale-percent"><span>Rebajas! <br> hasta un</span>50% <span>de descuento</span></div>
            <a href="#Tienda" class="cart-btn btn-lg" >Comprar ahora</a>
        </div>
    </section>
    <!-- end shop banner -->
    <p id="Tienda"></p>

    <!-- product section -->
    <div class="product-section mt-150 mb-150" >
        <div class="container">
            <div class="">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3 ><span class="orange-text">Nuestros</span> Productos</h3>
                        <p>Puedes adquirir cualquiera de nuestros productos desde tu hogar, pide online fácil, rápido y
                            seguro.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

   


    <!-- Frutas y verduras -->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Frutas y Verduras</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
            @foreach ($verduras as $verdura)
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product"><img src="images/{{$verdura->imagen}}"
                                    alt="" width="243" height="178"></a>
                        </div>
                        <h3>{{$verdura->nombre}}</h3>
                        <p class="product-price"><span>{{$verdura->unidad}}</span> s/ {{$verdura->precio}} </p>
                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $verdura->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $verdura->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $verdura->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $verdura->imagen}}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $verdura->categoria }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                    </div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end frutas y verduras-->


    <!-- Aguas y bebidas -->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Bebidas</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
                        @foreach ($bebidas as $bebida)
					<div class="single-product-item text-center">
						<div class="product-image text-center">
							<a href="single-product"><img src="images/{{$bebida->imagen}}"
                                    alt="" width="243" height="178"></a>
						</div>
						<h3 class="text-center">{{$bebida->nombre}}</h3><br>
						<p class="product-price"><span>Por unidad</span> S/{{$bebida->precio}} </p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $bebida->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $bebida->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $bebida->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $bebida->imagen }}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $bebida->slug }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
					</div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end aguas y bebidas -->

    <!-- Licores -->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Licores</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
            @foreach ($licores as $licor)
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="images/{{$licor->imagen}}"
                                    alt="" width="243" height="178"></a>
						</div>
						<h3>{{$licor->nombre}}</h3>
						<p class="product-price"><span>{{$licor->unidad}}</span> s/ {{$licor->precio}} </p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $licor->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $licor->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $licor->precio}}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $licor->imagen }}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $licor->unidad }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
					</div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end licores -->

    <!-- Comidas -->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Comidas</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
                        @foreach ($comidas as $comida)
					<div class="single-product-item text-center">
						<div class="product-image text-center">
							<a href="single-product"><img src="images/{{$comida->imagen}}"
                                    alt="" width="243" height="178"></a>
						</div>
						<h3 class="text-center">{{$comida->nombre}}</h3><br>
						<p class="product-price"><span>Por unidad</span> S/{{$comida->precio}} </p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $comida->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $comida->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $comida->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $comida->imagen }}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $comida->slug }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
					</div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end  Comidas-->

    <!-- Abarrotes -->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Abarrotes</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
                        @foreach ($abarrotes as $abarrote)
					<div class="single-product-item text-center">
						<div class="product-image text-center">
							<a href="single-product"><img src="images/{{$abarrote->imagen}}"
                                    alt="" width="243" height="178"></a>
						</div>
						<h3 class="text-center">{{$abarrote->nombre}}</h3><br>
						<p class="product-price"><span>Por unidad</span> S/{{$abarrote->precio}} </p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $abarrote->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $abarrote->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $abarrote->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $abarrote->imagen }}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $abarrote->slug }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
					</div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end abarrotes -->

    <!-- Embutidos-->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Embutidos</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
            @foreach ($embutidos as $embutido)
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="images/{{$embutido->imagen}}"
                                    alt="" width="243" height="178"></a>
						</div>
						<h3>{{$embutido->nombre}}</h3><br>
						<p class="product-price"><span>Por unidad</span> S/{{$embutido->precio}} </p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $embutido->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $embutido->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $embutido->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $embutido->imagen }}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $embutido->slug }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
					</div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end embutidos -->

    <!-- Higiene -->
    <div class="logo-carousel-section boton">
        <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center section-title">
                <h3><span class="section-title h2">Higiene</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner text-center">
                        @foreach ($higienes as $higiene)
					<div class="single-product-item text-center">
						<div class="product-image text-center">
							<a href="single-product"><img src="images/{{$higiene->imagen}}"
                                    alt="" width="243" height="178"></a>
						</div>
						<h3 class="text-center">{{$higiene->nombre}}</h3><br>
						<p class="product-price"><span>Por unidad</span> S/{{$higiene->precio}} </p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $higiene->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $higiene->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $higiene->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $higiene->imagen }}"
                                                id="img" name="img">
                                            <input type="hidden" value="{{ $higiene->slug }}" id="slug"
                                                name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row" style="text-align:center;">
                                                    <button class="btn btn-warning btn-sm h5 text-white"  title="add to cart" style="margin: 0 auto;" >
                                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
					</div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end higiene-->
@endsection
