<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nhatky extends Model
{
    public $timestamps = true;
    protected $table = 'NHATKY';
    protected $fillable = ['id','biennhan_id','nhanvien_id','noidung', 'congkhai'];
    
    public function rlsNhanvien()
    {
        return $this->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
    public function rlsBiennhan()
    {
        return $this->belongsTo('App\Model\biennhan', 'biennhan_id');
    }
}
