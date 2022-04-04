<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'item_id',
        'category_id',
        'item_name',
        'item_price',
        'description',
        'quantity',
        'session_id',
        'total_price',
        'user_address'
    ];
}
