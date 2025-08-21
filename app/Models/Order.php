<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order extends Model
{
    use HasUuids;
    protected $table = 'orders';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'customer_id', 'product_id', 'quantity', 'total', 'status'
    ];
}
