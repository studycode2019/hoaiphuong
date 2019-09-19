<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class classes extends Model
{
    public $timestamps = true;
    protected $table = '_class';
    protected $dates = ['deleted_at'];
    
    public function rlsClassList()
    {
        return $this->hasMany('App\Model\class_list', 'lophoc_id');
    }

    public function linkName() {
        return '<a href="'.route('staff.classes.view.get', ['class_id' => $this->id], false).'">'.$this->ten.'</a>';
    }

    public function sum() {
        return count($this->rlsClassList);
    }
}
