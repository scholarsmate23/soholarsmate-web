<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'name',
        'email',
        'phone',
        'address',
        'resume',
        'availability',
        'salary',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
