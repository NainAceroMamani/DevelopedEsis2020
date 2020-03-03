<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InicioController extends Controller
{
    public function preInscripcion(){
        return view('partials.preInscripcion');
    }

    public function create(Request $request){
        DB::select('call Insertar_preins(?,?,?,?,?,?,?,?,?,?,?,?)',
            array(
                $request->input('firstName'),
                $request->input('lastName'),
                $request->input('dni'),
                $request->input('cellPhone'),
                $request->input('email'),
                $request->input('country'),
                $request->input('city'),
                $request->input('tipo'),
                $request->input('yearStudent'),
                $request->input('institution'),
                $request->input('grade'),
                $request->input('voucher')
            )
        );
        $notification = 'Se ha registrado Correctamente.';
        return back()->with(compact('notification'));
    }
}
