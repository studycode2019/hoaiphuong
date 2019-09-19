<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class case_log extends Model
{
    public $timestamps = true;
    protected $table = '_case_log';
    protected $fillable = ['id','biennhan_id','nhanvien_id','noidung', 'congkhai'];
    
    public function rlsStaff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    public function rlsCases()
    {
        return $this->belongsTo('App\Model\cases', 'biennhan_id');
    }
}
