<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{

    public function registro(){
        return view("usuario.registro");
    }

    public function guardar(Request $request){
        $request->validate([
            "nombre"=>"required|min:2|max:15",
            "apellido"=>"required|min:2|max:15",
            "email"=>"required|email",
            "password"=>"required|min:8|confirmed",
            "password_confirmation"=>"required|min:8"
        ],[
            "nombre.required"=>"El nombre es un campo obligatorio",
            "nombre.min"=>"El minimo para el nombre es de 2",
            "nombre.max"=>"El maximo para el nombre es de 15",
            "apellido.required"=>"El apellido es un campo obligatorio",
            "apellido.min"=>"El minimo para el nombre es de 2",
            "apellido.max"=>"El maximo para el nombre es de 15",
            "email.required"=>"El campo email es obligatorio",
            "email.email"=>"Debe utilizar un formato correcto para el email",
            "password.required"=>"El campo password es obligatorio",
            "password.min"=>"El minimo del password es de 8 caracteres",
            "password.confirmed"=>"Los password no coinciden",

        ]);

        //redireccion: nos direcciona a una ruta creada en el web.php
        return redirect(route("usuario.registro"))->with("mensaje", "Has completado el registro");
    }
}
