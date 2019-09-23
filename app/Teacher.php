<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable =['FIRST_NAME',	'LAST_NAME', 'ID_NO', 'SCHOOL',	'TSC_NO', 'STATUS'];
}
