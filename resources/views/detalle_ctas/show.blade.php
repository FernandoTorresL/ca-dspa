@extends('layouts.app')

@section('title')
    Cta:{{ $detalle_cta->cuenta }}
@endsection

@section('content')
    <h1 class="h3">Cuenta: {{ $detalle_cta->cuenta }}</h1>
    <p class="card-text">
        Área: {{ $detalle_cta->area_id }}
        <small class="text-muted">{{ $detalle_cta->created }}</small>
    </p>
    <p class="card-body">
        Nombre: {{ $detalle_cta->nombre }}
    </p>
    <p class="card-body">
        Ciz: {{ $detalle_cta->ciz_id }}
    </p>
    <p class="card-body">
        Delegación: {{ $detalle_cta->delegacion_id }}
    </p>
    <p class="card-body">
        Grupo: {{ $detalle_cta->gpo_owner_id }}
    </p>
    <p class="card-body">
        Password Date: {{ $detalle_cta->passdate }}
    </p>
    <p class="card-body">
        Last Access: {{ $detalle_cta->last_access }}
    </p>
    <p class="card-body">
        Matrícula/Información: {{ $detalle_cta->install_data }}
    </p>

@endsection