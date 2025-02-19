<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TadFeedback extends Model
{
    use HasFactory;

    protected $table = 'tad_feedbacks';

    protected $fillable = [
        'reference_no',
        'name',
        'class',
        'boards',
        'address',
        'mobile',
        'father_name',
        'father_mobile',
        'mother_name',
        'mother_mobile',
        'photo',
        'admit_card',
        'email',
        'feedback',
    ];
}
