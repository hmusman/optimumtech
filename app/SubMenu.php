<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MainMenu;
class SubMenu extends Model
{
    public function mainmenu()
    {
    	return $this->belongsTo(MainMenu::class,'main_id','id');
    }
}
