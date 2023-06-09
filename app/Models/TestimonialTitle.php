<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'testimonial_title', 'testimonial_sub_title',
    ];
}
