<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\City;

class CountryController extends Controller
{
    public function cities(Country $country)
    {
        $countryId = $country->id;
        return City::get()->where('country_id', $countryId);
    }
}
