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

    public function serialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'ram' => $this->ram,
            'cpu' => $this->cpu,
            'disk' => $this->disk,
            'hourly_rate' => $this->hourly_rate
        ];
    }
}