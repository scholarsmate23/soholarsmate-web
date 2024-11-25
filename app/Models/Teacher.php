<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'qualification',
        'details',
        'experience_year',
        'prev_exp',
        'profile_img',
        'instagram_url',
        'facebook_url',
        'video_url'
    ];

    // Cast `prev_exp` as an array to handle JSON data easily
    protected $casts = [
        'prev_exp' => 'array',
    ];
}
