<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lophoc_danhsach extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = '_class_list';
    protected $dates = ['deleted_at'];
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsLophoc()
    {
        return $this->belongsTo('App\Model\lophoc', 'lophoc_id');
    }
}
