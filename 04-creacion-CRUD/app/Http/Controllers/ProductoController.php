<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::join("categorias", "categorias.id", "=", "productos.id_categoria")
                                ->select("productos.*", "categorias.descripcion as nombre_categoria")
                                ->orderby("productos.id")
                                ->get();

        return view("producto.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view("producto.create", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {
        Producto::create($request->all());
        return redirect(route('producto.index'))->with("mensaje", "Se ha creado el producto");
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
