<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        'hostname',
        'ip',
        'status'
    ];

    public function affectRandomIpAddress() {
        $this->ip = rand(0, 255) . '.' . rand(0, 255) . '.' . rand(0, 255) . '.' . rand(0, 255);
    }

    public function serialize() {
        return [
            'id' => $this->id,
            'ip' => $this->ip,
            'hostname' => $this->hostname,
            'status' => $this->status,
            'flavor' => $this->flavor_id,
            'image' => $this->image_id
        ];
    }

    public function flavor() {
        return $this->belongsTo('App\Flavor');
    }

    public function image() {
        return $this->belongsTo('App\Image');
    }
}
