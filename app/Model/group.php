<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    protected $table = '_staff';
    public $timestamps = true;

    public function rlsStaff()
    {
        return hasMany('App\Model\staff');
    }
}
