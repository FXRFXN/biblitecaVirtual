<?php

namespace App\Http\Controllers;

use App\Models\añadirUsuario;
use Illuminate\Http\Request;


class añadirUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = añadirUsuario::all();
        return view('añadirUsuario/añadirUsuario',compact('usuarios'));
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
        $añadirUsuario = new añadirUsuario;
        $añadirUsuario->nombre = $request->input('nombres');
        $añadirUsuario->apellido_materno=$request->input('materno');
        $añadirUsuario->apellido_paterno=$request->input('paterno');
        $añadirUsuario->num_control=$request->input('num_control');
        $añadirUsuario->num_telefono=$request->input('numero_telefono');
        $añadirUsuario->domicilio=$request->input('domicilio');
        $añadirUsuario->save();
        return back();
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
    public function edit(añadirUsuario $id)
    {
        return view ('añadirUsuario/editarUsuario',compact('id'));
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
        $añadirUsuarios = añadirUsuario::findOrFail($id);
        $añadirUsuarios->nombre = $request->input('nombres');
        $añadirUsuarios->apellido_materno=$request->input('materno');
        $añadirUsuarios->apellido_paterno=$request->input('paterno');
        $añadirUsuarios->num_control=$request->input('num_control');
        $añadirUsuarios->num_telefono=$request->input('numero_telefono');
        $añadirUsuarios->domicilio=$request->input('domicilio');
        $añadirUsuarios->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = añadirUsuario::find($id);
        $usuario->delete();
        return back()->with('succes','Libro eliminado correctamente');
    }
}
