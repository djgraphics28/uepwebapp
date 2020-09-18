<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'ename',
        'birthdate',
        'civil_status',
        'unique_id_num',
        'profile_pic',
        'address',
        'barangay',
        'street',
        'phone_num',
        'tel_num',
        'status',
    ];
}
