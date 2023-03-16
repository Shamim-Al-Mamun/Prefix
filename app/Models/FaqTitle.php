<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'faq_title', 'faq_sub_title', 'faq_bg_img'
    ];
}
