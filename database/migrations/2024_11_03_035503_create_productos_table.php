<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del producto
            $table->text('descripcion')->nullable(); // Descripción del producto
            $table->decimal('precio', 8, 2); // Precio del producto
            $table->string('categoria'); // Categoría (ej. "Lentes de sol", "Lentes de contacto")
            $table->string('imagen')->nullable(); // URL de la imagen del producto
            $table->boolean('en_tendencia')->default(false); // Para marcar productos en tendencia
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
