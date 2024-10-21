<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'form_name',
        'form_slug',
        'form_structure',
    ];

    // Cast form_structure to array for easier handling
    protected $casts = [
        'form_structure' => 'array',
    ];

    // Define the relationship with FormSubmission
    public function submissions()
    {
        return $this->hasMany(FormSubmission::class, 'form_id');
    }
}
