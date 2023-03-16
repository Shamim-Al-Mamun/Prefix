<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingCategory extends Model
{
    protected $fillable = [
        'pricing_category_name', 
        'pricing_category_slug',
    ];

  // use HasFactory;
    public function pricing()
    {
        return $this->hasMany(Pricing::class);
    }
}
