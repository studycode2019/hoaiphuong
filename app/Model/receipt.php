<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    protected $table = '_receipt';
    protected $fillable = ['id', 'solai', 'khachhang_id', 'nhanvien_id', 'noidung', 'sotien'];
    
    public function rlsStaff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    
    public function rlsClient()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function rlsField()
    {
        return $this->belongsTo('App\Model\field', 'phieuthu_danhmuc_id');
    }
    
    public function rlsBranch()
    {
        return $this->belongsTo('App\Model\branch', 'branch_id');
    }
    
}
