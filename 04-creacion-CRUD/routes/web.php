<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::resource("categorias", CategoriaController::class);
Route::resource("producto", ProductoController::class);
