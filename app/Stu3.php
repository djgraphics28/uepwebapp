<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu3 extends Model
{
    protected $fillable = [
        'student_id',
        'guardian_name',
        'guardian_address',
        'guardian_tel_num',
        'guardian_mobile_num',
        'relationship',
        'status',
    ];

    protected $table = 'stu3';
}
