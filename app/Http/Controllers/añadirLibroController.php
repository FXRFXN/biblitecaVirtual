<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\añadirLibro;

class añadirLibroController extends Controller
{

    public function index()
    {
        $alumnos = añadirLibro::all();
        return view ('añadirLibro/añadirLibro',compact('alumnos'));

    }

    public function create()
    {
        $vistaLibros = añadirLibro::all();
        return view ('añadirLibro/mostrarLibro',compact('vistaLibros'));
    }


    public function store(Request $request)
    {
        $añadirLibro = new añadirLibro;

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $desto = 'archivospdf/';
            $nombre = time() . '-' . $file->getClientOriginalName();
            $subida = $request->file('imagen')->move($desto,$nombre);
            $añadirLibro ->imagen = $desto . $nombre;

        }

        if($request->hasFile('pdf')){
            $file = $request->file('pdf');
            $desto = 'imagenlibro/';
            $nombre = time() . '-' . $file->getClientOriginalName();
            $subida = $request->file('pdf')->move($desto,$nombre);
            $añadirLibro ->pdf = $desto . $nombre;

        }


        $añadirLibro ->autor = $request->input('autor');
        $añadirLibro  ->ombre = $request->input('nombre');
        $añadirLibro  ->editorial= $request->input('editorial');
        $añadirLibro  ->lugarPublicacion = $request->input('lugarPublicacion');
        $añadirLibro  ->añoPublicacion = $request->input('añoPublicacion');

        $añadirLibro->save();
        return back();


    }

    public function show($id)
    {

        $libro = añadirLibro::find($id);
        return view ('show',compact('libro'));

    }

    public function edit(añadirLibro $id)
    {
        return view ('añadirLibro/editar',compact('id'));
    }

    public function update(Request $request,$id)
    {

        $libro = añadirLibro::findOrFail($id);
        $libro ->autor = $request->input('autor');
        $libro  ->ombre = $request->input('nombre');
        $libro  ->editorial= $request->input('editorial');
        $libro  ->lugarPublicacion = $request->input('lugarPublicacion');
        $libro  ->añoPublicacion = $request->input('añoPublicacion');
        $libro->save();
        return redirect()->route('libros.index');
    }


    public function destroy($id)
    {
        $libro = añadirLibro::find($id);
        $libro->delete();
        return back()->with('succes','Libro eliminado correctamente');
    }
}
