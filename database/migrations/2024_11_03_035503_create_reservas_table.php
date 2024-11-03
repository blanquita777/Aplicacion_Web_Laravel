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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente'); // Nombre del cliente
            $table->string('email')->nullable(); // Correo del cliente
            $table->string('telefono')->nullable(); // Teléfono del cliente
            $table->dateTime('fecha_hora'); // Fecha y hora de la cita
            $table->text('comentarios')->nullable(); // Comentarios adicionales
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
