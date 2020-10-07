<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    protected $table = 'event_registration';

    protected $fillable = ['event_id','event_name','student_name','student_email','student_phone','ticket_type'];
}
