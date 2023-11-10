<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsOrders extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table = 'detail_orders';

    protected $fillable = [
        'id',
        'id_order',
        'id_service',
        'importe',
        'descuento',
        'created_at',
        'updated_at'
    ];

}
