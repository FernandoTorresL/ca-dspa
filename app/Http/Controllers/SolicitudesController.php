<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSolicitudRequest;
use App\Log;
use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function show(Solicitud $solicitud)
    {
        Log::logInfo('Visitando Ver Solicitud: ' . $solicitud);
        return view('solicitudes.show', [
            'solicitud' => $solicitud
        ]);
    }

    public function create(CreateSolicitudRequest $request)
    {
        $solicitud = Solicitud::create([
            'valija_id' => 3,
            'lote_id' => 0,
            'delegacion_id' => 39,
            'subdelegacion_id' => 0,
            'user_id' => 2,
            'movimiento_id' => 1,
            'gpo_actual_id' => 22,
            'gpo_nuevo_id' => 23,
            'causa_rechazo_id' => 0,
            'fecha_solicitud' => $request->input('fecha_solicitud'),
            'nombre' => strtoupper(trim($request->input('nombre'))),
            'primer_apellido' => strtoupper($request->input('primer_apellido')),
            'segundo_apellido' => strtoupper($request->input('segundo_apellido')),
            'matricula' => strtoupper(trim($request->input('matricula'))),
            'curp' => strtoupper(trim($request->input('curp'))),
            'usuario' => strtoupper(trim($request->input('usuario'))),
            'comentario' => $request->input('comentario'),
            'archivo' => '',
        ]);

        return redirect('/solicitudes/'. $solicitud->id);
    }
}
