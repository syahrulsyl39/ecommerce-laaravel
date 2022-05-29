<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_code',
        'category',
        'product name',
        'description',
        'order_quantity',
        'price',
        'product_code',
    ];
}
