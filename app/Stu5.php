<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu5 extends Model
{
    protected $fillable = [
        'student_id',
        'student_type',
        'percent',
        'sponsor',
        'school_year',
        'semester',
        'year_lvl',
        'course',
        'block',
        'status',
    ];

    protected $table = 'stu5';
}
