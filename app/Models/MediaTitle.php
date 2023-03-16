<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaTitle extends Model
{
    protected $fillable = [
        'media_section_label', 
        'media_section_first_title', 
        'media_section_title_middle', 
        'media_section_title_last', 
        'media_section_title_desc', 
    ];

    // use HasFactory;
}