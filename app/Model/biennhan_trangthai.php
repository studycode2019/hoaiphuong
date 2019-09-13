<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class biennhan_trangthai extends Model
{
    public $timestamps = false;
    protected $table = '_case_status';
    
    public function rlsBiennhan()
    {
        return $this->hasMany('App\Model\biennhan');
    }
}
