<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'total_price'];
    protected $hidden = ['created_at','updated_at'];
    protected $table = 'order_products';
    protected $primaryKey = 'id';

    public function detail()
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
