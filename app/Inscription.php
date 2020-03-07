<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'link_photo_voucher', 'code_assistance', 'num_operation', 'activity_id', 'user_id', 'person_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
