<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'ctas_solicitudes';
    protected $primaryKey = 'id_solicitud';
    protected $fillable = [
        'id_valija',
        'fecha_solicitud_del',
        'id_lote',
        'delegacion',
        'subdelegacion',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'matricula',
        'curp',
        'usuario',
        'id_movimiento',
        'id_grupo_nuevo',
        'id_grupo_actual',
        'comentario',
        'id_causarechazo',
        'archivo',
        'id_user'
    ];
}
