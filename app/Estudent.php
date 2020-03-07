<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudent extends Model
{
    protected $fillable = [
        'year_student','college','country_id', 'city_id', 'person_id'
    ];
}
