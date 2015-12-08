<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    protected $fillable = [
        'name',
        'ram',
        'cpu',
        'disk',
        'hourly_rate'
    ];
}