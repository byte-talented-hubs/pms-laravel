<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $fillable = [
        'first_name',
        'last_name',
        'identifier',
        'home_phone',
        'mobile_phone',
        'email'
    ];
}