<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // use HasFactory;
    protected $fillable = [
        'title',
        'text',
        'img',
        // 'blog_categories_id',
    ];
    // use HasFactory;
    public function blog_category()
    {
        return $this->belongsTo('App\Models\BlogCategory', 'blog_categories_id');
    }
}
