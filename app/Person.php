<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'name_person','last_name_person','type_document','num_document','type_person','email_person','phone_person'
    ];

    public function inscriptions()
    {
        // belongsTo => muchos ; hasMany => uno
        return $this->belongsTo(Inscription::class);
    }

}
