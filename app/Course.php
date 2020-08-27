<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseApplication;
class Course extends Model
{
   public function applications()
   {
   		return $this->hasMany(CourseApplication::class,'course_id','id');
   }
}
