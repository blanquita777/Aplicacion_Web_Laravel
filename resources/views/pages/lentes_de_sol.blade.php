<!-- resources/views/pages/lentes_de_sol.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lentes de Sol en Tendencia</h1>
    <div class="productos">
        @foreach ($productos as $producto)
            <div class="producto">
                <img src="{{ asset('images/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
                <h2>{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                <p>Precio: ${{ $producto->precio }}</p>
            </div>
        @endforeach
    </div>
@endsection
