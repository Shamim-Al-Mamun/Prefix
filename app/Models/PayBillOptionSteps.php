<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayBillOptionSteps extends Model
{
    use HasFactory;
    protected $fillable = [
        'img', 'text', 'pay_bill_options_id'
    ];
    public function pay_bill_options()
    {
        return $this->belongsTo('App\Models\PayBillOptions', 'pay_bill_options_id');
    }
}
