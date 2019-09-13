<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lophoc extends Model
{
    public $timestamps = true;
    protected $table = '_class';
    protected $dates = ['deleted_at'];
    
    public function rlsDanhsach()
    {
        return $this->hasMany('App\Model\lophoc_danhsach');
    }

    public function linkName() {
        return '<a href="'.route('g.lophoc.xem', ['lophocid_id' => $this->id], false).'">'.$this->ten.'</a>';
    }

    public function sum() {
        return count($this->rlsDanhsach);
    }
}
