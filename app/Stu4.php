<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu4 extends Model
{
    protected $fillable = [
        'student_id',
        'form137',
        'good_moral',
        'birth_cert',
        'passport_picture',
        'stamp',
        'app_form',
        'envelope',
        'status',
    ];

    protected $table = 'stu4';
}
