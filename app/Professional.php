<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
        'grade_prefessional','college','country_id', 'city_id', 'person_id'
    ];
    
}
