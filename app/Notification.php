<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'type_user','name_notification','date_notification','inscription_id'
    ];
}
