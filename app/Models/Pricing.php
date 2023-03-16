<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'pricing_title',  
        'pricing_megabytes',
        'pricing_megabytes_text',
        'pricing_price_amount',
        'pricing_price_amount_bottom',
        'pricing_price_desc',
        'pricing_price_offer_desc',
        'pricing_price_button_text',
        'pricing_price_button_url',
    ];

     // use HasFactory;
     public function pricing_category()
     {
         return $this->belongsTo('App\Models\PricingCategory', 'pricing_category_id');
     }
 }