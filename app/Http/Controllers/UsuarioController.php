<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuarios']=Usuario::paginate(5);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
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

        $campos=[
            'Nombre'=>'required| string| max:100',
            'ApellidoPaterno'=>'required| string| max:100',
            'ApellidoMaterno'=>'required| string| max:100',
            'Correo'=>'required| email',
            'Foto'=>'required| max:10000',

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida'

        ];

        $this->validate($request, $campos, $mensaje);

        //$datosEmpleado=request()->all();
        $datosEmpleado=request()->except('_token');
        if($request->hasfile('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Usuario::insert($datosEmpleado);
        //return response()->json($datosEmpleado);
        return redirect('usuario')->with('mensaje','Usuario agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre'=>'required| string| max:100',
            'ApellidoPaterno'=>'required| string| max:100',
            'ApellidoMaterno'=>'required| string| max:100',
            'Correo'=>'required| email',

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',

        ];
        if($request->hasfile('Foto')){
            $campos=['Foto'=>'required| max:10000'];
            $mensaje=['Foto.required'=>'La foto es requerida'];
        }
        $this->validate($request, $campos, $mensaje);
        
        $datosEmpleado=request()->except(['_token','_method']);

        if($request->hasfile('Foto')){
            $usuario=Usuario::findOrFail($id);
            Storage::delete('public/'.$usuario->Foto);
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Usuario::where('id','=',$id)->update($datosEmpleado);
        $usuario=Usuario::findOrFail($id);
        //return view('usuario.edit', compact('usuario'));
        return redirect('usuario')->with('mensaje','Usuario Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $usuario=Usuario::findOrFail($id);

        if(Storage::delete('public/'.$usuario->Foto)){
            Usuario::destroy($id);
        }

        return redirect('usuario')->with('mensaje','Usuario borrado');
    }
}
