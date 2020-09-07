<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCustomer;
class Product extends Model
{
    public function customers()
    {
    	return $this->hasMany(ProductCustomer::class,'product_id','id');
    }
}
