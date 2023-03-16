<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverageArea extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'district',
        'maps_iframe_code'
    ];
}
