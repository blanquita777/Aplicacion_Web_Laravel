<!-- resources/views/pages/dejar_testimonio.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Deja tu Testimonio</h1>
    <form action="{{ route('guardarTestimonio') }}" method="POST">
        @csrf
        <div>
            <label for="nombre_cliente">Nombre:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required>
        </div>
        <div>
            <label for="contenido">Testimonio:</label>
            <textarea id="contenido" name="contenido" required></textarea>
        </div>
        <div>
            <label for="calificacion">Calificación:</label>
            <input type="number" id="calificacion" name="calificacion" min="1" max="5" required>
        </div>
        <button type="submit">Enviar Testimonio</button>
    </form>
@endsection
