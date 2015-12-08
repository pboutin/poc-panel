<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name',
        'version',
        'type',
        'min_ram',
        'min_cpu',
        'min_disk'
    ];
}