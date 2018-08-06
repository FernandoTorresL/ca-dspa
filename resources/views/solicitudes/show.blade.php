@extends('layouts.app')

@section('title')
    Solicitud:{{ $solicitud->id_solicitud }}
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


    <h1 class="h3">Solicitud</h1>

    <p class="card-text">
        USER-ID: {{ $solicitud->usuario }}
    </p>
    <p class="card-body">
    Fecha Solicitud: {{ $solicitud->fecha_solicitud_del }}
    </p>
    <p class="card-body">
    Nombre: {{ $solicitud->primer_apellido }}-{{ $solicitud->segundo__apellido }}-{{ $solicitud->nombre }}
    </p>
    <p class="card-body">
    Matrícula: {{ $solicitud->matricula }}
    </p>
    <p class="card-body">
    CURP: {{ $solicitud->curp }}
    </p>
    <p class="card-body">
        Comentario: {{ $solicitud->comentario }}
    </p>
@endsection
