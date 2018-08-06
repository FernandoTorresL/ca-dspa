<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    protected $fillable = [
        'valija_id',
        'lote_id',
        'delegacion_id',
        'subdelegacion_id',
        'user_id',
        'movimiento_id',
        'gpo_actual_id',
        'gpo_nuevo_id',
        'causa_rechazo_id',
        'fecha_solicitud',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'matricula',
        'curp',
        'usuario',
        'comentario',
        'archivo'
    ];

}
