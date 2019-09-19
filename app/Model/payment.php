<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = '_payment';
    
    public function rlsStaff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    
    public function rlsClient()
    {
        return $this->belongsTo('App\Model\client', 'ten');
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
