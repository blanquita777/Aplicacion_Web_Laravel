<!-- resources/views/pages/reservar_cita.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Reserva tu Cita</h1>
    <form action="{{ route('reservar') }}" method="POST">
        @csrf
        <div>
            <label for="nombre_cliente">Nombre:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div>
            <label for="fecha_hora">Fecha y Hora:</label>
            <input type="datetime-local" id="fecha_hora" name="fecha_hora" required>
        </div>
        <div>
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios"></textarea>
        </div>
        <button type="submit">Reservar Cita</button>
    </form>
@endsection
