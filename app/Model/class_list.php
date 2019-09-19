<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class class_list extends Model
{
    public $timestamps = true;
    protected $table = '_class_list';
    protected $dates = ['deleted_at'];
    
    public function rlsClient()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function rlsClasses()
    {
        return $this->belongsTo('App\Model\classes', 'lophoc_id');
    }
}
