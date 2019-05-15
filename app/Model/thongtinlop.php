<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class thongtinlop extends Model
{
    public $timestamps = true;
    protected $table = 'THONGTINLOP';
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsLophoc()
    {
        return $this->belongsTo('App\Model\khachhang', 'lophoc_id');
    }
}
