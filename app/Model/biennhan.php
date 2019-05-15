<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use biennhan_trangthai as trangthai;

class biennhan extends Model
{
    public $timestamps = true;
    protected $table = 'BIENNHAN';
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsNhanvien()
    {
        return $this->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
    
    public function rlsNhatky()
    {
        return $this->hasMany('App\Model\nhatky');
    }
    
    public function rlsTrangthai()
    {
        return $this->belongsTo('App\Model\biennhan_trangthai', 'tiendo');
    }
}
