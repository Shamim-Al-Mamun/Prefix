<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactBox extends Model
{
    protected $fillable = [
        'contact_phone_icon',
        'contact_phone_title',
        'contact_phone_text',
        'contact_email_icon',
        'contact_email_title',
        'contact_email_text',
        'contact_location_icon',
        'contact_location_title',
        'contact_location_text',
    ];

  // use HasFactory;
}
