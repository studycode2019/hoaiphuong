<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lophoc extends Model
{
    public $timestamps = true;
    protected $table = 'LOPHOC';
    
    public function rlsDanhsach()
    {
        return $this->hasMany('App\Model\lophoc_danhsach');
    }
}
