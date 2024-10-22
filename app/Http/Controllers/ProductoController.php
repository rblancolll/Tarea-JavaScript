<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductoController extends Controller
{
    // Mostrar la lista de productos
    public function index(): JsonResponse
    {
        $productos = Producto::all(); // Obtener todos los productos
        return response()->json($productos); // Devuelve los productos como JSON
    }


}
