<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    protected $fillable =['FIRST_NAME', 'LAST_NAME', 'ID_NO', 'TSC_NO', 'STATUS'];
}
