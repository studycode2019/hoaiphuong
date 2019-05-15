<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class khoahoc extends Model
{
    public $timestamps = true;
    protected $table = 'KHOAHOC';
    
    public function rlsLophoc()
    {
        return $this->hasMany('App\Model\lophoc');
    }
    
}
