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

    public function serialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'version' => $this->version,
            'type' => $this->type,
            'min_ram' => $this->min_ram,
            'min_cpu' => $this->min_cpu,
            'min_disk' => $this->min_disk
        ];
    }
}