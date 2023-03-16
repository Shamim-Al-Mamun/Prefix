<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSettings extends Model
{
    protected $fillable = [
        'footer_bg_image',  
        'footer_logo', 
        'footer_heading', 
        'footer_text', 
        'footer_facebook_url', 
        'footer_twitter_url', 
        'footer_linkedin_url', 
        'footer_instagram_url',
        'footer_youtube_url',     
        'footer_link_one',    
        'footer_link_one_url',    
        'footer_link_two',    
        'footer_link_two_url',   
        'footer_link_three',    
        'footer_link_three_url',   
        'footer_link_four',    
        'footer_link_four_url',   
        'footer_link_five',    
        'footer_link_five_url',   
        'footer_address',      
        'footer_phone',      
        'footer_email',    
        'support_title',      
        'support_number',
        'footer_large_image',    
        'footer_copyright',    
    ];
   // use HasFactory;
}
