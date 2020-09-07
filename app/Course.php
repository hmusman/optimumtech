<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseApplication;
use App\Category;
class Course extends Model
{
   public function applications()
   {
   		return $this->hasMany(CourseApplication::class,'course_id','id');
   }

    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }
}
