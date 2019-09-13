<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class phieuchi extends Model
{
    protected $table = '_payment';
    
    public function rlsNhanvien()
    {
        return $this->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'ten');
    }
    
    public function rlsDanhmuc()
    {
        return $this->belongsTo('App\Model\phieuthu_danhmuc', 'phieuthu_danhmuc_id');
    }
}
