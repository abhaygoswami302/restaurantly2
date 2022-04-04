<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'category_id',
        'item_name',
        'item_price',
        'description',
        'quantity',
        'session_id',
        'total_price',
        'image',
        'user_address'
    ];
}
