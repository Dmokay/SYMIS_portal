<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $fillable = ['FIRST_NAME', 'LAST_NAME', 'ID_NO', 'SCHOOL', 'STUDENT_REG_NO', 'STATUS']; 
}
