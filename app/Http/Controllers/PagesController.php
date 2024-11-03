<?php

// App\Http\Controllers\PagesController.php

namespace App\Http\Controllers;

use App\Models\Producto;  // Asegúrate de importar el modelo Producto
use App\Models\Testimonio; // Asegúrate de importar el modelo Testimonio
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        // Obtener productos populares, lentes de sol, lentes oftalmológicos y lentes de contacto
        $productosPopulares = Producto::where('categoria', 'popular')->get();
        $lentesDeSol = Producto::where('en_tendencia', true)->where('categoria', 'Lentes de Sol')->get();
        $lentesOftalmologicos = Producto::where('en_tendencia', true)->where('categoria', 'Lentes Oftalmológicos')->get();
        $lentesDeContacto = Producto::where('en_tendencia', true)->where('categoria', 'Lentes de Contacto')->get();

        // Obtener testimonios
        $testimonios = Testimonio::all();

        // Pasar los datos a la vista
        return view('pages.home', compact('productosPopulares', 'lentesDeSol', 'lentesOftalmologicos', 'lentesDeContacto', 'testimonios'));
    }
    public function productos() {
        return view('pages.productos');
    }
    
}
