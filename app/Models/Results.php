<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable = [
        'id',
        'course_type',
        'exam',
        'file_name',
    ];
}
