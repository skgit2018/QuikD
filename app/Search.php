<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    private $usertable = 'qdm_users';
    private $drivertable = 'qdm_drivers_info';
    public $timestamps = false;
}
