<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemasController extends Controller
{
    public function problema1($numero){
       return view("problema1", ["numero"=>$numero]); 
    }

    public function problema2(){
        for($n=0;$n<=12;$n++){
            $numeros[]=["numero"=>$n];
        }
        return view("problema2", ["numeros"=>$numeros]);
    }

    public function problema2_vertabla($numero){
        for($n=0;$n<=12;$n++)
            $resultado[]=["n"=>$n, "producto"=>$n . "x" . $numero, "resultado"=>$n*$numero];
        
        return view("problema2_tabla", compact("resultado"));
    }

    public function problema3(){
        for($n=1;$n<=100;$n++)
            $numeros[]=[
                        "numero"=>$n,    
                        "hash"=>md5($n)
            ];
        return view("problema3", compact("numeros"));
    }

    public function verMd5($numero) {
        // Generar el hash MD5 del número recibido
        $hash = md5($numero);
    
        // Retornar la vista con el número y el hash
        return view('problema3_verMd5', compact('numero', 'hash'));
    }

    public function problema4(){
        for($n=1;$n<=100;$n++)
            $numeros[]=[
                    "numero"=>$n,
                    "hash"=>md5($n)
            ];
        return view("problema4", compact("numeros"));
    }

    public function problema5(){
        for($i=1; $i<=10;$i++)
            $valores[]=["numero"=>$i, 
                        "valor"=>rand(1, 100)
                        ];
        
        return view("problema5", compact("valores"));
    }
    public function problema6(){
        for($i=1; $i<=10;$i++)
            $valores[]=["numero"=>$i, 
                        "valor"=>rand(1, 100)
                        ];
        
        return view("problema6", compact("valores"));
    }
}

