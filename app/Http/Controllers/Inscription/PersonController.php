<?php

namespace App\Http\Controllers\Inscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;
use App\Person;
use App\Estudent;
use App\Professional;
use App\Inscription;
use App\PaymentInscription;
use App\Notification;

use App\Http\Requests\PersonRequest;

class PersonController extends Controller
{
    public function create()
    {
        $countries = Country::all();

        $countryId = old('country_id');
        if ($countryId) {
            $country = Country::find($countryId);
            $cities = $country->cities;
            dd($cities);
        } else $cities = collect();
        
        return view('pre_inscription.create', compact('countries', 'cities'));
    }

    public function store(PersonRequest $request)
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
        $name = '';
        $identification = $request->input('num_document');
        if($request->hasFile('link_photo')) {
            $file = $request->file('link_photo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/storage/'.$identification, $name);
        }
        
        $activity_id = 1;
        $inscription = Inscription::Create(
            [ 
                'person_id'         => $person_id ,
                'activity_id'       => $activity_id , 
                'link_photo_voucher'=> $name,
            ]
        );

        PaymentInscription::Create(
            [
                'inscription_id'         => $inscription->id ,
                'status_pre_inscription' => 1
            ]
        );

        Notification::Create(
            $request->only('type_person')
                + [ 
                    'name_notification'     => $person->name_person . ' - Se ha preinscrito',
                    'inscription_id'        => $inscription->id
                ]
        );

        $notification = 'Se ha Registrado Correctamente.';
        return back()->with(compact('notification'));
    }

}
