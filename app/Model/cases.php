<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use biennhan_trangthai as trangthai;

class cases extends Model
{
    public $timestamps = true;
    protected $table = '_case';
    
    public function rlsClient()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function rlsStaff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    
    public function rlsCaseLog()
    {
        return $this->hasMany('App\Model\case_log');
    }
    
    public function rlsCaseStatus()
    {
        return $this->belongsTo('App\Model\case_status', 'tiendo');
    }
}
