<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class CompanyModule extends Model
{
    use SoftDeletes;
    protected $fillable = ['company_id','module_id'];
    protected $casts = [];
}
