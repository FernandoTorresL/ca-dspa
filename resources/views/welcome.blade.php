@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Portal de la División de Soporte a los Procesos de Afiliación</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        @forelse($messages as $detalle_cta)
            <div class="col-6">
                <img class="img-thumbnail" src="{{ $detalle_cta['image'] }}">
                <p class="card-text">
                    {{ $detalle_cta['content'] }}
                    <a href="/messages/{{ $detalle_cta['id'] }}">Leer más</a>
                </p>
            </div>
        @empty
            <p>No hay inventario que mostrar</p>
        @endforelse
    </div>
@endsection
