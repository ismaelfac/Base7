<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['person_id','state_company'];
    protected $casts = [];

}
