<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id	', 'product_id', 'product_name', 'quantily', 'price', 'size', 'topping', 'created_at', 'updated_at',
    ];
}
