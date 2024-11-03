<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lentes de Sol
        Producto::create([
            'nombre' => 'Lentes de Sol Classic',
            'descripcion' => 'Lentes de sol con protección UV',
            'precio' => 120.00,
            'categoria' => 'lentes_sol',
            'imagen' => 'sol_classic.png',
            'en_tendencia' => true,
        ]);

        // Lentes Oftalmológicos
        Producto::create([
            'nombre' => 'Lentes Oftalmológicos Modernos',
            'descripcion' => 'Lentes con estilo moderno para uso diario',
            'precio' => 95.00,
            'categoria' => 'oftalmologicos',
            'imagen' => 'oftalmologicos_modernos.jpg',
            'en_tendencia' => false,
        ]);

        // Productos Populares
        Producto::create([
            'nombre' => 'Lentes de Sol Trendy',
            'descripcion' => 'Lentes de sol de última moda',
            'precio' => 150.00,
            'categoria' => 'popular',
            'imagen' => 'trendy_sunglasses.png',
            'en_tendencia' => true,
        ]);

        // Lentes de Contacto
        Producto::create([
            'nombre' => 'Lentes de Contacto Diarios',
            'descripcion' => 'Lentes de contacto desechables diarios',
            'precio' => 45.00,
            'categoria' => 'contacto',
            'imagen' => 'diary_contact_lenses.png',
            'en_tendencia' => true,
        ]);

        // Añade más productos para cada categoría según sea necesario...
    }
}
