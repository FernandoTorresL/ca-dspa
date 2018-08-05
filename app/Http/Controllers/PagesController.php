<?php

namespace App\Http\Controllers;

use App\Detalle_cta;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $detalle_ctas = Detalle_cta::all();


        return view('welcome', [
            'detalle_ctas' => $detalle_ctas,
        ]);
    }
}
