<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\categoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view("categoria.index", compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(categoriaRequest $request)
    {
        Categoria::create($request->all());
        return redirect(route("categorias.index"))->with("mensaje", "Se ha creado la categoria!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {

        return view("categoria.show", compact("categoria"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view("categoria.edit", compact("categoria"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(categoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect(route("categorias.index"))->with("mensaje", "Se ha actualizado la categoria!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete($categoria);
        return redirect(route("categorias.index"))->with("mensaje", "Se ha eliminado la categoria!");

    }
}
