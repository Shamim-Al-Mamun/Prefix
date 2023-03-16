<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'customer_first_name',
        'customer_last_name',
        'customer_number',
        'customer_email',
        'customer_address',
        'customer_district',
        'customer_upazilla',
        'customer_comments',
    ];
}
