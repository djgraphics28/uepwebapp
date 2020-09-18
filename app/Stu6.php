<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu6 extends Model
{
    protected $fillable = [
        'student_id',
        'school_year',
        'semester',
        'total_fees',
        'status',
    ];

    protected $table = 'stu5';
}
