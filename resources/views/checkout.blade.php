@extends('layout')
@section('titulo', 'Checkout')
@section('css')
    <style>
        @media print {
            .boton {
                display: none;
                color: white;
            }

            .fondo {
                background-color: white;
                border: 0 !important;
                border-color: #fff;
            }
			.grande{
				font-size:80px;
				margin:0 auto;
			}

        }
    </style>
@stop
@section('content')


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg boton">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>El mejor producto en tu mano</p>
                        <h1>Verificar productos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

        <!-- check out section -->
        <div class="checkout-section mt-150 mb-150 fondo">
            <div class="container fondo">
            @if (count($errors)>0)

                                                <div class="alert alert-danger" role="alert">
                                                    <ul>
                                                    @foreach ($errors->all() as $error )
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                    </ul>
                                                </div>

                                                @endif
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card single-accordion">
                                    <div class="card-header boton" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Datos del comprador
                                            </button>
                                        </h5>
                                    </div>
                                    
                                    <div id="collapseOne" class="collapse show fondo boton" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body fondo">
                                            <div class="billing-address-form fondo">
                                                
                                                <form action="{{ route('checkout.index') }}" method="POST" enctype="multipart/form-data" class="fondo">
                                                {{ csrf_field() }}
                                                    <p>Nombre:<input type="text" name="nombre" placeholder="Nombre"
                                                            value="{{ Auth::user()->name }}" class="fondo"></p>
                                                            @error('nombre')
                                                                <br>
                                                                <small style="color: red;">El campo de nombre es obligatorio</small>
                                                            @enderror
                                                    <p>Correo: <input type="email" name="correo" class="fondo" placeholder="Correo"
                                                            value="{{ Auth::user()->email }}"></p>
                                                    <p> Número telefónico: <input class="fondo" name="telefono" type="tel"
                                                            placeholder="Número Telefónico" value="{{isset($compras->telefono)?$compras->telefono:old('telefono')}}"></p>
                                                    <p>Referencia:
                                                        <textarea class="fondo" name="referencia" id="bill" cols="30" rows="10" placeholder="Añadir comentario" value="{{isset($compras->referencia)?$compras->referencia:old('referencia')}}"></textarea>
                                                    </p>
                                                    <p style="display:none;">Envio:<input type="text" name="envio" placeholder="Nombre"
                                                            value="10" class="fondo"></p>
                                                    <p style="display:none;">Subtotal:<input type="text" name="subtotal" placeholder="Nombre"
                                                            value="{{ \Cart::getTotal() }}" class="fondo"></p>
                                                    <p style="display:none;">Total:<input type="text" name="total" placeholder="Nombre"
                                                            value="{{ \Cart::getTotal() + 10 }}" class="fondo"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-accordion boton">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Dirección de envío
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shipping-address-form">
                                                <p><input class="card-header  billing-address-form" type="text" name="direccion"
                                                        placeholder="Dirección de envío"
                                                        style="padding:10px 500px 10px 10px;" value="{{isset($compras->direccion)?$compras->direccion:old('direccion')}}"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card single-accordion boton">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree" style="margin:20px 0 20px 0; ">
                                                Detalles de la tarjeta
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="card-details">
                                                <p>Tarjeta de crédito o débito</p>
                                                <img src="https://paymentsdk.spotifycdn.com/svg/cards/visa.svg"
                                                    height="20">
                                                <img src="https://paymentsdk.spotifycdn.com/svg/cards/mastercard.svg"
                                                    height="20">
                                                <img src="https://paymentsdk.spotifycdn.com/svg/cards/amex.svg"
                                                    height="20">
                                                <p>Datos de pago</p>
                                                
                                                    <p style="margin:20px 0 20px 0; ">Número de la tarjeta: </p>
                                                    <input type="text" name="num_tarjeta" 
                                                            style="padding:10px 500px 10px 10px;"
                                                            placeholder="Número de la tarjeta">
                                                    <p style="margin:20px 0 20px 0; " value="{{isset($tarjetas->num_tarjeta)?$tarjetas->num_tarjeta:old('num_tarjeta')}}">Fecha de vencimiento: </p>
                                                    <input
                                                            style="padding:10px 535px 10px 10px;" type="date" name="fec_vencimiento" 
                                                            placeholder="Fecha de vencimiento" value="{{isset($tarjetas->fec_vencimiento)?$tarjetas->fec_vencimiento:old('fec_vencimiento')}}">
                                                    <p style="margin:20px 0 20px 0; ">Código de seguridad: </p>
                                                    <input
                                                            style="padding:10px 500px 10px 10px;"type="text" name="cod_seguridad" 
                                                            placeholder="Código de seguridad" value="{{isset($tarjetas->cod_seguridad)?$tarjetas->cod_seguridad:old('cod_seguridad')}}">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 grande">
                        <div class="order-details-wrap grande">
                            <table class="order-details grande">
                                <thead class="grande boton">
                                    <tr>
                                        <th>Detalles de la orden</th>
                                        <th >Precio</th>
                                    </tr>
                                </thead>
                                <tbody class="order-details-body">
                                    <tr>
                                        <td>Producto</td>
                                        <td>Total</td>
                                    </tr>
                                    <tr>
                                        @foreach ($cartCollection as $item)
										
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>S/{{ \Cart::get($item->id)->getPriceSum() }}</td>
                                    </tr>
    @endforeach
    </tbody>
    <tbody class="checkout-details">
        <tr>
            <td>Subtotal<i class="fa-regular fa-circle-check"></i></td>
            <td>S/ {{ \Cart::getTotal() }}</td>
        </tr>
        <tr>
            <td>Envío</td>
            <td>S/{{ $products[0]['shipping_cost'] }}</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>S/{{ \Cart::getTotal() + 10 }}</td>
        </tr>
    </tbody>
    </table>
    <!--<div class="boton" style="margin-top:30px;">
        <a href="javascript:window.print()" class="boxed-btn ">Hacer pedido</a>
    </div>-->
	@if(count($cartCollection)>0)
                        
                        <br><button type="submit" class="btn btn-success btn-md"><i class="fa-regular fa-circle-check"></i>Hacer pedido</button> 
                        
                    
                @endif
                </form>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- end check out section -->

@endsection
