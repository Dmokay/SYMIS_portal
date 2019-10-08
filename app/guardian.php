<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = ['first_name', 'last_name', 'id_no', 'school', 'tsc_no', 'status'];
}
