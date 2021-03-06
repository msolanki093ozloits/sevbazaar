<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    public function order()
    {
    	return $this->belongsTo(Order::class, 'ord_id', 'order_id');
    }

    public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function userAddress()
    {
    	return $this->hasOne(Useraddress::class, 'address_id', 'address_id');
    }
}
