<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregar($id)
    {
        // Busca el producto en la base de datos
        $producto = Producto::find($id);
        
        // Verifica si el producto existe
        if ($producto) {
            // Agrega el producto a la sesión
            $carrito = session()->get('carrito', []);
            $carrito[$id] = [
                "nombre" => $producto->nombre,
                "cantidad" => isset($carrito[$id]) ? $carrito[$id]['cantidad'] + 1 : 1,
                "precio" => $producto->precio,
            ];
            session()->put('carrito', $carrito);
            return redirect()->back()->with('success', 'Producto agregado al carrito de compras');
        }

        return redirect()->back()->with('error', 'Producto no encontrado');
    }

    public function ver()
{
    $carrito = session()->get('carrito');
    return view('pages.carrito', compact('carrito')); // Asegúrate de que esta línea coincida con la ruta del archivo
}

}
