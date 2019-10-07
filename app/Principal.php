<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    protected $fillable = ['first_name', 'last_name', 'id_no', 'tsc_no', 'status'];
}
