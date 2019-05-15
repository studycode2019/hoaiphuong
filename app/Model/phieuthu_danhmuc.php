<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class phieuthu_danhmuc extends Model
{
    protected $table = 'PHIEUTHU_DANHMUC';
    protected $fillable = ['id', 'ten'];
    
    public function rlsPhieuthu()
    {
        return $this->hasMany('App\Model\phieuthu');
    }
}
