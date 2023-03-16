<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialList extends Model
{
    use HasFactory;
    protected $fillable = [
        'testimonial_text',
        'testimonial_img',
        'testimonial_rating',
        'testimonial_name',
        'testimonial_title',
    ];
}
