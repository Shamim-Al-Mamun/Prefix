<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqListTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'faq_list_title', 'faq_list_text',
    ];
    public function FaqListAnswer()
    {
        return $this->hasMany(FaqListAnswer::class);
    }
}
