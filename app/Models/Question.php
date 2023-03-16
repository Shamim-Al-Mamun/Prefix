<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_bg_img',
        'question_title',
        'question_text',

        'question_btn1_text',
        'question_btn1_link',

        'question_btn2_text',
        'question_btn2_link',
    ];
}
