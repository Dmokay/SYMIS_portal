<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pta extends Model
{
    protected $fillable = ['first_name', 'last_name', 'id_no', 'school', 'pta_code', 'status'];
}
