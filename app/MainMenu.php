<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubMenu;
class MainMenu extends Model
{
    public function submenus()
    {
    	return $this->hasMany(SubMenu::class,'main_id','id');
    }
}
