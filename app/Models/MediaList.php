<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaList extends Model
{
    protected $fillable = [
        'medialist_thumbnail', 
        'medialist_link', 
        'medialist_title', 
    ];

    // use HasFactory;
    public function media_category()
    {
        return $this->belongsTo('App\Models\MediaCategory', 'media_category_id');
    }
}