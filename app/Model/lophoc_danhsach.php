<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lophoc_danhsach extends Model
{
    public $timestamps = true;
    protected $table = 'LOPHOC_DANHSACH';
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsLophoc()
    {
        return $this->belongsTo('App\Model\lophoc', 'lophoc_id');
    }
}
