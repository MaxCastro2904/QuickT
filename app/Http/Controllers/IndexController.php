<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Licores;
use App\Models\Embutidos;
use App\Models\Bebidas;
use App\Models\Verduras;
use App\Models\Comidas;
use App\Models\Higienes;
use App\Models\Abarrotes;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $embutidos = Embutidos::all();
        $licores =Licores::all();
        $bebidas =Bebidas::all();
        $verduras = Verduras::all();
        $comidas =Comidas::all();
        $higienes =Higienes::all();
        $abarrotes = Abarrotes::all();
        $products = Product::all();
        return view('index')->with(['products' => $products, 'licores' => $licores, 'embutidos' => $embutidos, 'bebidas' => $bebidas, 'verduras' => $verduras, 'comidas' => $comidas, 'higienes' => $higienes, 'abarrotes' => $abarrotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
