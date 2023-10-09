<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
    'first_name',
    'middle_name',
    'last_name',
    'class',
    'div',
    'academic_year',
    'dob',
    'place_of_birth',
    'caste',
    'religion',
    'subcaste',
    'gr_no',
    'lc_no',
    'aadhar_no',
    'father_name',
    'mother_name',
    'nationality',
    'last_school_attended',
    'date_of_admission',
    'class_of_admission',
    'result',
    ];
}
