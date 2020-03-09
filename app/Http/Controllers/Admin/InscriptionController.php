<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\PaymentInscription;
use App\Inscription;
use App\Person;
use App\Country;
use App\Estudent;
use App\Professional;
use App\Notification;
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

        $countries = Country::all();

        $countryId = old('country_id');
        if ($countryId) {
            $country = Country::find($countryId);
            $cities = $country->cities;
        } else $cities = collect();
        
        return view('admin.inscription.create', compact('countries', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $person = Person::create(
            $request->only('name_person','last_name_person','type_document','num_document','type_person','email_person','phone_person')
        );
        $person_id = $person->id;

        if($request->input('type_person') == 1){
            Estudent::create(
                $request->only('year_student','college','country_id', 'city_id')
                + [ 'person_id' => $person_id ]
            );
        }
        else if ($request->input('type_person') == 2){
            Professional::create(
                $request->only('grade_prefessional','college','country_id', 'city_id')
                + [ 'person_id' => $person_id]
            );
        }

        $activity_id = 1;
        $inscription = Inscription::Create(
            $request->only('payment_inscription')
            + [ 
                'person_id'         => $person_id ,
                'activity_id'       => $activity_id,
                'user_id'           => auth()->user()->id
            ]
        );

        $payment = PaymentInscription::Create(
            $request->only('payment_advanced','payment_inscription', 'type_payment')
            + [
                'inscription_id'         => $inscription->id ,
                'status_pre_inscription' => 1
            ]
        );

        $pago_advanced = $request->input('payment_advanced');
        $pago_inscription = $request->input('payment_inscription');
        $id = $payment->id;
        if($pago_advanced >= 100) {
            PaymentInscription::where('id', $id)
            ->update([
                'status_pre_inscription' => 2 ,
                'payment_inscription' => 100 ,
            ]);
        }else if ($pago_inscription >= 100) {
            PaymentInscription::where('id', $id)
            ->update([
                'status_pre_inscription' => 2 ,
            ]);
        }

        Notification::Create(
            $request->only('type_person')
                + [ 
                    'name_notification'     => $person->name_person . ' - Se ha preinscrito',
                    'inscription_id'        => $inscription->id
                ]
        );

        $notification = 'Se ha Registrado Correctamente.';
        return redirect('Admininscription')->with(compact('notification'));
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
        $rules = [
            'code_assistance'      =>  'unique:inscriptions,code_assistance|nullable'
        ];
        $this->validate($request, $rules);

        $pago_advanced = $request->input('payment_advanced');
        $pago_inscription = $request->input('payment_inscription');
        PaymentInscription::where('id', $id)
          ->update([
            'type_payment' => $request->input('type_payment') ,
            'payment_advanced' => $request->input('payment_advanced') ,
            'payment_inscription' => $request->input('payment_inscription') ,
        ]);

        Inscription::where('id', $request->input('inscription_id'))
          ->update([
            'num_operation' => $request->input('num_operation') ,
            'code_assistance' => $request->input('code_assistance') ,
            'user_id' => auth()->user()->id
        ]);

        Person::where('id', $request->input('person_id'))
          ->update([
            'name_person' => $request->input('name_person') ,
            'last_name_person' => $request->input('last_name_person') ,
            'num_document' => $request->input('num_document') ,
        ]);

        $notification = 'Usuario '. $request->input('name_person') .' Actualizado Correctamente.';
        return redirect('/Admininscription')->with(compact('notification'));
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
        $rules = [
            'code_assistance'      =>  'unique:inscriptions,code_assistance|nullable'
        ];
        $this->validate($request, $rules);
        
        Inscription::where('id', $request->input('id'))
          ->update(['code_assistance' => $request->input('code_assistance')]);
        
        $notification = 'Codigo Ingresado Correctamente.';
        return redirect('/Admininscription')->with(compact('notification'));
    }
}
