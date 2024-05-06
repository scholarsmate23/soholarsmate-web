<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderImg extends Model
{
    use HasFactory;

    protected $table ='slider_img';

    protected $fillable = ['category','file_name']; 
}
