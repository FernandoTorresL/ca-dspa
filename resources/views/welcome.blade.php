@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')
    <ul>
        <li>
            <h3>¿Ya tienes una cuenta? <a href="">Inicia sesión</a></h3>
        </li>
        <p>Ingresa con tu CURP y contraseña</p>
        <p>Los módulos visibles dependerán del perfil/permisos otorgados al usuario</p>
    </ul>
    <br>
    <br>
    <br>
    <ul>
        <li>
            <h3>¿Aún no tienes cuenta? <a href="">Registrate aquí</a></h3>
        </li>
        <p>Sólo necesitas tu CURP y correo electrónico</p>
        <p>Tu solicitud será revisada por los administradores de este portal</p>
    </ul>
@endsection
