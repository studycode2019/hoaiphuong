<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class danhsachlop extends Model
{
    public $timestamps = true;
    protected $table = '_class_list';
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsLophoc()
    {
        return $this->belongsTo('App\Model\khachhang', 'lophoc_id');
    }
    
    public function rlsPhieuthu()
    {
        return $this->hasOne('App\Model\phieuthu', 'phieuthu_id');
    }
    
    public function rlsNhanvien()
    {
        return $this->hasOne('App\Model\phieuthu', 'phieuthu_id')->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
}
