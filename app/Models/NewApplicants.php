<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewApplicants extends Model
{
    use HasFactory;

    protected $table ='new_applicants';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'father_name',
        'father_occupation',
        'mother_name',
        'mother_occupation',
        'dob',
        'blood_group',
        'category',
        'nationality',
        'address',
        'school_name',
        'school_address',
        'boards',
        'grade',
        'course'
    ];
}
