<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTitle extends Model
{
    protected $fillable = [
        'product_section_label', 
        'product_section_first_title', 
        'product_section_title_middle', 
        'product_section_title_last', 
        'product_section_title_desc', 
    ];

    // use HasFactory;
}