<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    protected $fillable = [
        'hero_title', 
        'hero_sub_title',
        'hero_text', 
        'hero_main_button', 
        'hero_main_button_link', 
        'hero_main_button_two', 
        'hero_main_button_two_link', 
        'hero_link_button', 
        'hero_link_button_url', 
        'hero_link_button_thumbnail', 
        'hero_link_button_two', 
        'hero_link_button_two_url', 
        'hero_link_button_two_thumbnail', 
        'hero_link_button_three', 
        'hero_link_button_three_url', 
        'hero_link_button_three_thumbnail', 
        'hero_link_button_four', 
        'hero_link_button_four_url', 
        'hero_link_button_four_thumbnail', 
        'hero_thumbnail', 
    ];

  // use HasFactory;
}
