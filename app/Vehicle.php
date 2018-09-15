<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $timestamps = false;
    protected $table = 'qdm_vehicle_info';
}
