<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usuarioController;

route::get("/usuario/registro", [usuarioController::class, "registro"])->name("usuario.registro");
route::post("/usuario/guardar", [usuarioController::class, "guardar"])->name("usuario.guardar");
