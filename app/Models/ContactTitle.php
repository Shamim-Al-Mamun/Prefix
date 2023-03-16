<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTitle extends Model
{
    protected $fillable = [
        'contact_section_label', 
        'contact_section_first_title', 
        'contact_section_title_middle', 
        'contact_section_title_last', 
        'contact_section_title_desc', 
    ];

    // use HasFactory;
}