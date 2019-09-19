<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class field extends Model
{
    protected $table = '_receipt_cate';
    protected $fillable = ['id', 'ten'];
    
    public function rlsReceipt()
    {
        return $this->hasMany('App\Model\phieuthu', 'phieuthu_danhmuc_id');
    }

    public function rlsPayment()
    {
        return $this->hasMany('App\Model\phieuchi');
    }
}
