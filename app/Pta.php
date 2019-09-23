<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pta extends Model
{
    protected $fillable =['FIRST_NAME', 'LAST_NAME', 'ID_NO', 'SCHOOL', 'PTA_CODE', 'STATUS'];
}
