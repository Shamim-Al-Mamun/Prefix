<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'customer_number',
        'customer_email',
        'customer_comments',
    ];
}
