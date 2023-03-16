<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqListAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'faq_list_answer', 'faq_list_id',
    ];
    public function faq_list()
    {
        return $this->belongsTo('App\Models\FaqListTitle', 'faq_list_id');
    }
}
