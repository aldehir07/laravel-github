<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebaController;

route::get("/usuario/registro", [pruebaController::class, "registro"])->name("usuario.registro");
route::post("/usuario/guardar", [pruebaController::class, "guardar"])->name("usuario.guardar");
