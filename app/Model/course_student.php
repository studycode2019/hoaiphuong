<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course_student extends Model
{
    public $timestamps = true;
    protected $table = '_course_students';
    protected $dates = ['deleted_at'];
    
    public function client()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function course()
    {
        return $this->belongsTo('App\Model\course', 'lophoc_id');
    }
}
