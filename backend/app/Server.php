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

    public function serialize() {
        return [
            'id' => $this->id,
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