<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingTitle extends Model
{
    protected $fillable = [
        'pricing_section_label', 
        'pricing_section_first_title', 
        'pricing_section_title_middle', 
        'pricing_section_title_last', 
        'pricing_section_title_desc', 
    ];

    // use HasFactory;
}