<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    use HasFactory;

    /**
     * Obtain Order from Order Line
     */
    public function order()
    {
        return $this->belongsTo(Order::class); // Asegúrate de que corresponda con el modelo de orden
    }

    /**
     * Obtain products.
     */
    public function product()
    {
        return $this->belongsTo(Product::class); // Asegúrate de usar el nombre correcto del modelo de Producto
    }
}
