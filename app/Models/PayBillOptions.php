<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayBillOptions extends Model
{
    use HasFactory;
    protected $fillable = [
        'option'
    ];
    public function PayBillOptionSteps()
    {
        return $this->hasMany(PayBillOptionSteps::class);
    }
}
