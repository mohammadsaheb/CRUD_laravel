<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orders'; 

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'total_price',
        'status',
        'order_date',
    ];

    protected $dates = ['deleted_at'];
}
