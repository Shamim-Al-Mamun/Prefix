<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explore extends Model
{
    protected $fillable = [
        'card1_img',
        'card1_button_text',
        'card1_button_link',

        'card2_img',
        'card2_button_text',
        'card2_button_link',

    ];
}
