<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentInscription extends Model
{
    protected $fillable = [
        'type_inscription', 'type_payment', 'status_pre_inscription', 'payment_advanced', 'payment_inscription', 'inscription_id'
    ];

    public function inscription()
    {
        // belongsTo => muchos ; hasMany => uno
        return $this->belongsTo(Inscription::class);
    }
}
