<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class field extends Model
{
    protected $table = '_fields';
    protected $fillable = ['id', 'ten'];
    
    public function receipts()
    {
        return $this->hasMany('App\Model\receipt', 'phieuthu_danhmuc_id');
    }

    public function payment()
    {
        return $this->hasMany('App\Model\payment');
    }
}
