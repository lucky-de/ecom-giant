<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'product_id', 'quantity', 'total_price'];
    protected $hidden = ['created_at','updated_at'];
    protected $table = 'cart_products';
    protected $primaryKey = 'id';

    public function product()
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
