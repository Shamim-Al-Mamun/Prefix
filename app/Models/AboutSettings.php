<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSettings extends Model
{
    protected $fillable = [
        'about_image', 
        'about_title', 
        'about_experience_icon', 
        'about_experience_number', 
        'about_experience_after_number', 
        'about_experience_text', 
        'about_section_label', 
        'about_section_first_title', 
        'about_section_title_middle', 
        'about_section_title_last', 
        'about_section_title_desc', 
        'about_section_title_rich_desc', 
        'about_progress_label', 
        'about_progress_percent', 
        'about_progress_label_two', 
        'about_progress_label_two_percent', 
        'about_progress_label_three', 
        'about_progress_label_three_percent', 
        'about_progress_label_four',
        'about_progress_label_four_percent',     
    ];
   // use HasFactory;
}
