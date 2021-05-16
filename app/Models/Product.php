<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['amount_with_currency'];

    //custom property
    public function getAmountWithCurrencyAttribute()
    {
        return 'VND' . $this->price;
    }
}
