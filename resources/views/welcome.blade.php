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
        <form action="/solicitudes/create" method="post">
            <div class="form-group">
                {{ csrf_field() }}
                <input type="text" name="message" class="form-control" placeholder="Crear solicitudes?">
            </div>
        </form>
    </div>

    <div class="row">
        @forelse($detalle_ctas as $detalle_cta)
            <div class="col-6">
                <p class="card-text">
                    {{ $detalle_cta['cuenta'] }}
                </p>
            </div>
        @empty
            <p>No hay inventario que mostrar</p>
        @endforelse
    </div>
@endsection
