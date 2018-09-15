<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentityVerification extends Model
{
    public $timestamps = false;
    protected $table = 'qdm_driver_idverify';
}
