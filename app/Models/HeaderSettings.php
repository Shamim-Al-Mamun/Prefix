<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderSettings extends Model
{
    protected $fillable = [
        'header_logo', 
        'header_phone', 
        'header_email', 
        'header_button', 
        'header_button_url', 
        'header_button_two', 
        'header_button_two_url', 
        'header_button_three', 
        'header_button_three_url', 
        'header_facebook_url', 
        'header_twitter_url', 
        'header_linkedin_url', 
        'header_instagram_url',
        'header_youtube_url',     
    ];
   // use HasFactory;
}
