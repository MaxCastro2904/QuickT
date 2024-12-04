@extends('layout')
@section('titulo', 'Abarrotes')
@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Productos Variados</p>
						<h1>Abarrotes</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Todo</li>
                            <li data-filter=".chocolates">Chocolates</li>
                            <li data-filter=".pastas">Pastas</li>
                            <li data-filter=".condimentos">Condimentos</li>
                            <li data-filter=".conserva">Conserva</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
            @foreach ($abarrotes as $abarrote)
                <div class="col-lg-4 col-md-6 text-center {{$abarrote->categoria}}">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="images/{{$abarrote->imagen}}"
                                    alt="" width="243" height="178"></</a>
						</div>
						<h3>{{$abarrote->nombre}}</h3>
						<p class="product-price"><span>Por unidad</span> S/{{$abarrote->precio}}</p>
						<form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $abarrote->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $abarrote->nombre }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $abarrote->precio }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $abarrote->imagen}}"
                                                id="img" name="img">
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
				</div>
            @endforeach

			</div>

		</div>
	</div>
	<!-- end products -->


@endsection