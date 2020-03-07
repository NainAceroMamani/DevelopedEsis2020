<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\PaymentInscription;
use App\Inscription;
use App\Http\Controllers\Controller;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = PaymentInscription::paginate(10);
        return view('admin.inscription.index', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscription = PaymentInscription::find($id);
        return view('admin.inscription.update', compact('inscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function inscriptionConfirm(PaymentInscription $inscription)
    {
        $inscription->payment_inscription = '100';
        $inscription->status_pre_inscription = 2;
        $inscription->save();
        
        $notification = 'Se ha inscrito correctamente.';
        return redirect('/Admininscription')->with(compact('notification'));
    }

    public function codigoConfirm(Inscription $inscription)
    {
        return view('admin.inscription.codeInscription', compact('inscription'));
    }

    public function showcodigoConfirm(Request $request)
    {
        Inscription::where('id', $request->input('id'))
          ->update(['code_assistance' => $request->input('code_assistance')]);
        
        $notification = 'Codigo Ingresado Correctamente.';
        return redirect('/Admininscription')->with(compact('notification'));
    }
}
