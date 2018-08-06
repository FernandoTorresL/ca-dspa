<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSolicitudRequest;
use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function create(CreateSolicitudRequest $request)
    {
        $solicitud = Solicitud::create([
            'id_valija' => 3,
            'fecha_solicitud_del' => $request->input('fecha_solicitud_del'),
            'id_lote' => 0,
            'delegacion' => 39,
            'subdelegacion' => $request->input('subdelegacion'),
            'nombre' => strtoupper(trim($request->input('nombre'))),
            'primer_apellido' => strtoupper($request->input('primer_apellido')),
            'segundo_apellido' => strtoupper($request->input('segundo_apellido')),
            'matricula' => strtoupper(trim($request->input('matricula'))),
            'curp' => strtoupper(trim($request->input('curp'))),
            'usuario' => strtoupper(trim($request->input('usuario'))),
            'id_movimiento' => $request->input('tipo_movimiento'),
            'id_grupo_nuevo' => $request->input('gpo_nuevo'),
            'id_grupo_actual' => $request->input('gpo_actual'),
            'comentario' => $request->input('comentario'),
            'id_causarechazo' => 0,
            'archivo' => '',
            'id_user' => 2,
        ]);

        dd($solicitud);

        return 'Solicitud Created!';
    }
}
