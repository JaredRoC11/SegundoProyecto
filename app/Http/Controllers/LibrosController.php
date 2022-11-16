<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Models\Autor;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libros/librosIndex', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros/librosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'ISBN' => 'required|min:13|max:13',
            'nombreLibro' => 'required|min:5|max:50',
            'nombreAutor' => 'required|min:5|max:50',
            'nombreEditorial' => 'required|min:5|max:50',
            'existencia' => 'required',
       ]);

        Libro::create($request->all());

        return redirect('/libro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libros/libroShow', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libro  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('libros/libroEdit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'ISBN' => 'required',
            'nombreLibro' => 'required',
            'nombreAutor' => 'required',
            'nombreEditorial' => 'required',
            'existencia' => 'required',

       ]);

       $libro->ISBN = $request->ISBN;
       $libro->nombreLibro = $request->nombreLibro;
       $libro->nombreAutor = $request->nombreAutor;
       $libro->nombreEditorial = $request->nombreEditorial;
       $libro->existencia = $request->existencia;
       $libro->save();

       return redirect('/libro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();

        return redirect('/libro');
    }
}
