<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductCustomer extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class,'product_id','id');
    }
}
