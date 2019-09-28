<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = '_payments';
    
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
