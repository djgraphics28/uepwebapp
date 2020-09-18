<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu2 extends Model
{
    protected $fillable = [
        'student_id',
        'address_num',
        'street',
        'town',
        'province',
        'country',
        'postal_code',
        'tel_num',
        'fax',
        'valid_until',
        'status',
    ];

    protected $table = 'stu2';
}
