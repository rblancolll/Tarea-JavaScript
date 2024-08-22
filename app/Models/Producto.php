<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Define el nombre de la tabla si es diferente al nombre por defecto
    protected $table = 'productos';

    // Opcional: Si usas timestamps
    public $timestamps = true;
}
