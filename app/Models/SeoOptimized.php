<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoOptimized extends Model
{
    protected $fillable = [
        'meta_name',  'meta_description', 'meta_keywords',  'meta_author'
    ];

    // use HasFactory;
}