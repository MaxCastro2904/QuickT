<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tarjetas;
use App\Models\Envios;
use App\Models\Compras;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        
        
        $cartCollection = \Cart::getContent();
        $products = Product::all();
        //$tarjetas=request()->except('_token');
        //Tarjetas::insert($tarjetas);
        return view('checkout')->with(['products' => $products, 'cartCollection' => $cartCollection]);
    }

    public function cart(Request $request)  {
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $campos=[
            'nombre'=>'required| string| max:100',
            'correo'=>'required| email',
            'referencia'=>'required| string| max:100',
            'telefono'=>'required| string| max:100',
            'direccion'=>'required| max:10000',
            'num_tarjeta'=>'required| max:10000',
            'fec_vencimiento'=>'required| max:10000',
            'cod_seguridad'=>'required| max:10000',

        ];
        $mensaje=[
            'required'=>'El/La :attribute es requerido'

        ];

        $tarjeta= new Tarjetas;
        $tarjeta->num_tarjeta=$request->num_tarjeta;
        $tarjeta->fec_vencimiento=$request->fec_vencimiento;
        $tarjeta->cod_seguridad=$request->cod_seguridad;
        $tarjeta->save();

        $envio=new Envios;
        $envio->nombre=$request->nombre;
        $envio->correo=$request->correo;
        $envio->telefono=$request->telefono;
        $envio->direccion=$request->direccion;
        $envio->referencia=$request->referencia;
        $envio->save();

        $compra= new Compras;
        $compra->envio=$request->envio;
        $compra->subtotal=$request->subtotal;
        $compra->total=$request->total;
        $compra->save();

        $cartCollection = \Cart::getContent();
        $products = Product::all();
        //dd($cartCollection);
        //return view('checkout')->with(['products' => $products, 'cartCollection' => $cartCollection]);
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!', ['products' => $products, 'cartCollection' => $cartCollection]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre'=>'required| string| max:100',
            'correo'=>'required| email',
            'referencia'=>'required| string| max:100',
            'telefono'=>'required| string| max:100',
            'direccion'=>'required| max:10000',
            'num_tarjeta'=>'required| max:10000',
            'fec_vencimiento'=>'required| max:10000',
            'cod_seguridad'=>'required| max:10000',

        ];
        $mensaje=[
            'required'=>'El/La :attribute es requerido'

        ];

        $this->validate($request, $campos, $mensaje);

        $tarjeta= new Tarjetas;
        $tarjeta->num_tarjeta=$request->num_tarjeta;
        $tarjeta->fec_vencimiento=$request->fec_vencimiento;
        $tarjeta->cod_seguridad=$request->cod_seguridad;
        $tarjeta->save();

        $envio=new Envios;
        $envio->nombre=$request->nombre;
        $envio->correo=$request->correo;
        $envio->telefono=$request->telefono;
        $envio->direccion=$request->direccion;
        $envio->referencia=$request->referencia;
        $envio->save();

        $compra= new Compras;
        $compra->envio=$request->envio;
        $compra->subtotal=$request->subtotal;
        $compra->total=$request->total;
        $compra->save();

        $cartCollection = \Cart::getContent();
        $products = Product::all();
        //dd($cartCollection);
        //return view('checkout')->with(['products' => $products, 'cartCollection' => $cartCollection]);
        return redirect()->route('cart.index')->with('success_msg', 'La compra ha sido realizada con exito', ['products' => $products, 'cartCollection' => $cartCollection]);

    }
        public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'La compra ha sido realizada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
