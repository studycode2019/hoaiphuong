<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class phieuthu extends Model
{
    protected $table = 'PHIEUTHU';
    protected $fillable = ['id', 'solai', 'khachhang_id', 'nhanvien_id', 'noidung', 'sotien'];
    
    public function rlsNhanvien()
    {
        return $this->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsPhieuthuDanhmuc()
    {
        return $this->belongsTo('App\Model\phieuthu_danhmuc', 'phieuthu_danhmuc_id');
    }
    
    
}
