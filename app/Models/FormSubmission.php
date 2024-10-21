<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FormSubmission extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'form_id',
        'form_name',
        'submission_data',
    ];

    // Cast submission_data to array for easier handling
    protected $casts = [
        'submission_data' => 'array',
    ];

    // Define the relationship with Form
    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id');
    }

    public function submissions()
    {
        return $this->hasMany(FormSubmission::class, 'form_id');
    }
}
