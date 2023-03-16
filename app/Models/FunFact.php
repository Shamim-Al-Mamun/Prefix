<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunFact extends Model
{
    protected $fillable = [
        'funfact_thumbnail', 
        'funfact_countdown', 
        'funfact_countdown_after',
        'funfact_desc',
    ];
   // use HasFactory;
}
