<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="container">
        <!-- Carrusel de fotos -->
        <div id="photoCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/promocion.jpg') }}" class="d-block w-100" alt="Descripción de la imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carrucel.png') }}" class="d-block w-100" alt="Descripción de la imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/promocion2.jpg') }}" class="d-block w-100" alt="Descripción de la imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#photoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#photoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

                <!-- Productos Populares -->
        <div class="productos-populares my-5">
            <h1>Productos Populares</h1>
            <div class="row">
                @foreach ($productosPopulares as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="producto card">
                            <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text">Precio: ${{ $producto->precio }}</p>
                                <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Agregar al Carrito de Compras</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Lentes de Sol en Tendencia -->
        <div class="lentes-sol my-5">
            <h1>Lentes de Sol en Tendencia</h1>
            <div class="row">
                @foreach ($lentesDeSol as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="producto card">
                            <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text">Precio: ${{ $producto->precio }}</p>
                                <a href="{{ route('cart.add', $producto->id) }}" class="btn btn-primary">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Lentes Oftalmológicos de Moda -->
        <div class="lentes-oftalmologicos my-5">
            <h1>Lentes Oftalmológicos de Moda</h1>
            <div class="row">
                @foreach ($lentesOftalmologicos as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="producto card">
                            <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text">Precio: ${{ $producto->precio }}</p>
                                <a href="{{ route('cart.add', $producto->id) }}" class="btn btn-primary">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Lentes de Contacto Destacados -->
        <div class="lentes-contacto my-5">
            <h1>Lentes de Contacto Destacados</h1>
            <div class="row">
                @foreach ($lentesDeContacto as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="producto card">
                            <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text">Precio: ${{ $producto->precio }}</p>
                                <a href="{{ route('cart.add', $producto->id) }}" class="btn btn-primary">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Reservar Citas -->
        <div class="reservar-cita my-5 text-center">
            <h1>Agenda tu Revisión Visual con Nuestro Optometrista</h1>
            <p>¡No esperes más! Reserva tu cita ahora y cuida tu salud visual.</p>
            <a href="{{ route('reservas.create') }}" class="btn btn-primary">Reservar Cita</a>
        </div>

        <!-- Dejar Testimonio -->
        <div class="dejar-testimonio my-5 text-center">
            <h1>Déjanos tu Testimonio</h1>
            <a href="{{ route('testimonios.index') }}" class="btn btn-secondary">Dejar Testimonio</a>
        </div>

        <!-- Mostrar Testimonios -->
        <div class="testimonios my-5">
            <h1>Testimonios de Nuestros Clientes</h1>
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
    </div>
@endsection
