<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes,HasRolesAndPermissions;
    protected $fillable = [
        'name', 'email', 'password', 'state', 'is_active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'state' => 'boolean',
        'is_active' => 'boolean'
    ];

    protected $dates = ['deleted_at'];

    // relations

    //validations

    // getters -presenters

    //queries - repositories

    //application logic
}
