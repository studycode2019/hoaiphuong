<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class case_status extends Model
{
    public $timestamps = false;
    protected $table = '_case_status';
    
    public function rlsCases()
    {
        return $this->hasMany('App\Model\cases');
    }
}
