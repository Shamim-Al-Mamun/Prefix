<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverageTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'description',
    ];
}
