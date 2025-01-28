<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'student_number',
        'name',
        'course',
        'email',
        'student_type',
        'date_of_birth',
        'sex',
        'religion',
        'citizenship',
        'marital_status',
        'guardian_name',
        'cellphone_number',
        'address',
    ];
}
