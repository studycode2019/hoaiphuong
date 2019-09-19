<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public $timestamps = true;
    protected $table = '_course';
    
    public function rlsClasses()
    {
        return $this->hasMany('App\Model\classes');
    }
    
}
