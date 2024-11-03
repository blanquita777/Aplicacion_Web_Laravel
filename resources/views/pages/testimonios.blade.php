<!-- resources/views/pages/testimonios.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Testimonios</h1>
    <div class="testimonios">
        @foreach ($testimonios as $testimonio)
            <div class="testimonio">
                <h3>{{ $testimonio->nombre_cliente }}</h3>
                <p>{{ $testimonio->contenido }}</p>
                <p>Calificación: 
                    @for ($i = 0; $i < $testimonio->calificacion; $i++)
                        ★
                    @endfor
                </p>
            </div>
        @endforeach
    </div>
@endsection
