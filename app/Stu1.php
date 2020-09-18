<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu1 extends Model
{
    protected $fillable = [
        'student_id',
        'gender',
        'civil_status',
        'country_birth',
        'birthdate',
        'country_citizenship',
        'age',
        'blood_type',
        'remarks',
        'status',
    ];

    protected $table = 'stu1';
}
