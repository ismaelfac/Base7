<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CustomerRol extends Pivot
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
