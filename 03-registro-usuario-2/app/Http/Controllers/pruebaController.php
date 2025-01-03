<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function registro(){
        return view('usuario.registro');
    }

    public function guardar(Request $request){
        $request->validate([
            "nombre"=>"required|min:2|max:15",
            "email"=>"required|email",
            "password"=>"required|min:8|confirmed",
            "password_confirmation"=>"required|min:8"
        ],[
            "nombre.required"=>"El nombre es un campo obligatorio",
            "nombre.min"=>"El minimo para el nombre es de 2",
            "nombre.max"=>"El maximo para el nombre es de 15",
            "email.required"=>"El campo email es obligatorio",
            "email.email"=>"Debe utilizar un formato correcto para el email",
            "password.required"=>"El campo password es obligatorio",
            "password.min"=>"El minimo del password es de 8 caracteres",
            "password.confirmed"=>"Los passwords no coinciden"
        ]);

        return redirect(route("usuario.registro"))->with("status", "Usuario registrado con exito");
    }
}
