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
                <label for="inputfecha_solicitud_del">Fecha Solicitud</label>
                <input class="form-control" type="date" name="fecha_solicitud_del" id="inputfecha_solicitud_del">
            </div>

            <div class="form-group">
                <label for="inputPrimerApellido">Primer Apellido</label>
                <input type="text" class="form-control" id="inputPrimerApellido" placeholder="Primer Apellido" name="primer_apellido">
            </div>

            <div class="form-group new-sol">
                <label for="inputSegundoApellido">Segundo Apellido</label>
                <input type="text" class="form-control" id="inputSegundoApellido" placeholder="Segundo Apellido" name="segundo_apellido">
            </div>

            <div class="form-group new-sol">
                <label for="inputNombre">Nombre(s)</label>
                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombre">
            </div>

            <div class="form-group new-sol">
                <label for="inputMatricula">Matrícula</label>
                <input type="text" class="form-control" id="inputMatricula" placeholder="# Matrícula | TTD" name="matricula">
            </div>

            <div class="form-group new-sol">
                <label for="inputCurp">CURP</label>
                <input type="text" name="curp" class="form-control @if($errors->has('curp')) is-invalid @endif" placeholder="CURP">
                {{--@if ($errors->any())--}}
                @if ($errors->has('curp'))
                    @foreach($errors->get('curp') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>

            <div class="form-group new-sol">
                <label for="inputUsuario">USER-ID</label>
                <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario" name="usuario">
            </div>

            <div class="form-group new-sol">
                <label for="inputcomentario">Comentario</label>
                <textarea class="form-control" id="inputcomentario" rows="3" placeholder="Comentario" name="comentario" style="margin: 0px; width: 938px; height: 69px;"></textarea>
            </div>

            <div class="form-group new-sol">
                <button type="submit" class="btn btn-primary">Crear Solicitud</button>
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
