<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaCategory extends Model
{
    protected $fillable = [
        'medialist_category_name', 
        'medialist_category_slug',
    ];

  // use HasFactory;
    public function medialist()
    {
        return $this->hasMany(MediaList::class);
    }
}
