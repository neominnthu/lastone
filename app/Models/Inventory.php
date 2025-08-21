<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Inventory extends Model
{
    use HasUuids;
    protected $table = 'inventories';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'product_id', 'quantity', 'location'
    ];
}
