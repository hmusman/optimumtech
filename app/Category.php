<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Course;
class Category extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class,'category_id','id');
    }

    public function courses()
    {
    	return $this->hasMany(Course::class,'category_id','id');
    }
}
