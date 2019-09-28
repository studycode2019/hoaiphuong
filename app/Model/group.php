<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    protected $table = '_groups';
    public $timestamps = true;

    public function staffs()
    {
        return hasMany('App\Model\staff');
    }
}
