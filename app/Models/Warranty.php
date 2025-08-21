<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Warranty extends Model
{
    use HasUuids;
    protected $table = 'warranties';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'product_id', 'order_id', 'start_date', 'end_date', 'status'
    ];
}
