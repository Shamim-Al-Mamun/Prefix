<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_thumbnail', 
        'product_title', 
        'product_price', 
        'product_desc', 
        'product_quick_view_desc', 
        'prodcut_button', 
        'prodcut_button_url'
    ];

    // use HasFactory;
}