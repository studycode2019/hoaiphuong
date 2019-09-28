<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ticket_status extends Model
{
    public $timestamps = false;
    protected $table = '_ticket_statuses';
    
    public function tickets()
    {
        return $this->hasMany('App\Model\ticket');
    }
}
