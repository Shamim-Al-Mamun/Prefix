<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitePages extends Model
{
    protected $fillable = [
        'page_title', 'page_permalink', 'page_content', 'page_description'
    ];
    // use HasFactory;
}
