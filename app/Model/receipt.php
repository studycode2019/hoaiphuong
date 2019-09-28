<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    protected $table = '_receipts';
    protected $fillable = ['id', 'solai', 'khachhang_id', 'nhanvien_id', 'noidung', 'sotien'];
    
    public function staff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    
    public function client()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function field()
    {
        return $this->belongsTo('App\Model\field', 'phieuthu_danhmuc_id');
    }
    
    public function branch()
    {
        return $this->belongsTo('App\Model\branch', 'branch_id');
    }
    
}
