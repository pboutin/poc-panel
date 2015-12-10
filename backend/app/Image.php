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
            'minRam' => $this->min_ram,
            'minCpu' => $this->min_cpu,
            'minDisk' => $this->min_disk
        ];
    }
}
