<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = ['first_name', 'last_name', 'id_no', 's_school', 's_reg_no', 'status'];
}
