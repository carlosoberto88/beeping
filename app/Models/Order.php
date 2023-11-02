<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Obtain lines from orders
     */
    public function orderLines()
    {
        return $this->hasMany(OrderLine::class); // Usa el nombre correcto del modelo de la línea de órdenes
    }
}
