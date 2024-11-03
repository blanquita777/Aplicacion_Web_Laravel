<?php

// App\Http\Controllers\PagesController.php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Testimonio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productosPopulares = Producto::where('categoria', 'popular')->limit(5)->get();
        $lentesDeSol = Producto::where('categoria', 'lentes_sol')->limit(5)->get();
        $lentesOftalmologicos = Producto::where('categoria', 'oftalmologicos')->limit(5)->get();
        $lentesDeContacto = Producto::where('categoria', 'contacto')->limit(5)->get();
        $testimonios = Testimonio::limit(5)->get();

        // Devuelve todos los datos en un solo retorno
        return view('pages.home', compact('productosPopulares', 'lentesDeSol', 'lentesOftalmologicos', 'lentesDeContacto', 'testimonios'));
    }
}

