<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $fillable = [
        'feature_title', 
        'feature_text',
        'feature_icon', 
    ];

  // use HasFactory;
}
