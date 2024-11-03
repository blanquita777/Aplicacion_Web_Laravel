<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Muestra los productos populares
    public function populares()
    {
        // Obtiene productos de la categoría 'popular' de la base de datos
        $productos = Producto::where('categoria', 'popular')->get();
        
        // Retorna la vista con los productos populares
        return view('pages.populares', compact('productos'));
    }

    // Muestra lentes de sol en tendencia
    public function lentesDeSolEnTendencia()
    {
        // Obtiene productos en tendencia de la categoría 'Lentes de Sol'
        $productos = Producto::where('en_tendencia', true)->where('categoria', 'Lentes de Sol')->get();
        
        // Retorna la vista con los lentes de sol en tendencia
        return view('pages.lentes_de_sol', compact('productos'));
    }

    // Muestra lentes oftalmológicos de moda
    public function lentesOftalmologicos()
    {
        // Obtiene productos en tendencia de la categoría 'Lentes Oftalmológicos'
        $productos = Producto::where('en_tendencia', true)->where('categoria', 'Lentes Oftalmológicos')->get();
        
        // Retorna la vista con los lentes oftalmológicos de moda
        return view('pages.lentes_oftalmologicos', compact('productos'));
    }

    // Muestra lentes de contacto destacados
    public function lentesDeContacto()
    {
        // Obtiene productos en tendencia de la categoría 'Lentes de Contacto'
        $productos = Producto::where('en_tendencia', true)->where('categoria', 'Lentes de Contacto')->get();
        
        // Retorna la vista con los lentes de contacto destacados
        return view('pages.lentes_contacto', compact('productos'));
    }
}
