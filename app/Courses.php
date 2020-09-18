<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'course_code',
        'course_fullname',
        'created_by_id',
        'status',
    ];

    protected $table = 'courses';
}
