<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayBill extends Model
{
    protected $fillable = [
        'paybill_bg_image', 
        'paybill_section_label', 
        'paybill_section_first_title', 
        'paybill_section_title_middle', 
        'paybill_section_title_last', 
        'paybill_section_title_desc', 
        'paybill_tab_name_one', 
        'paybill_image_one', 
        'paybill_button_one', 
        'paybill_button_url_one', 
        'paybill_tab_name_two', 
        'paybill_image_two', 
        'paybill_button_two', 
        'paybill_button_url_two', 
        'paybill_tab_name_three', 
        'paybill_image_three', 
        'paybill_button_three', 
        'paybill_button_url_three', 
    ];

    // use HasFactory;
}