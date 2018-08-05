<?php

namespace App\Http\Controllers;

use App\Detalle_cta;
use Illuminate\Http\Request;

class DetalleCtasController extends Controller
{
    public function show(Detalle_cta $detalle_cta)
    {
        return view('detalle_ctas.show', [
            'detalle_cta' => $detalle_cta
        ]);
    }
}
