<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProblemasController;

//PROBLEMA #1
route::get("/problema1/{numero}", [ProblemasController::class, "problema1"])->name("problema1");

//PROBLEMA #2
route::get("/problema2", [ProblemasController::class, "problema2"])->name("problema2");
route::get("/problema2/tabla/{numero}", [ProblemasController::class, "problema2_vertabla"])->name("problema2_vertabla");

//PROBLEMA #3
route::get("/problema3", [ProblemasController::class, "problema3"])->name("problema3");
route::get('/problema3/ver/{numero}', [ProblemasController::class, 'verMd5'])->name('problema3.verMd5');

//PROBLEMA #4
route::get("/problema4", [ProblemasController::class, "problema4"])->name('problema4');

//PROBLEMA #5
route::get("/problema5", [ProblemasController::class, "problema5"])->name('problema5');

//PROBLEMA #6
route::get("/problema6", [ProblemasController::class, "problema6"])->name('problema6');
