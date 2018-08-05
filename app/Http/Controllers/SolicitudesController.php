<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function create(Request $request)
    {

//        dd($request->all());

        $this->validate($request, [
            'curp' => ['required', 'max:18']
        ]);

        return 'Created!';
    }
}
