<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["codigo", "descripcion", "cantidad", "precio", "id_categoria"];
}
