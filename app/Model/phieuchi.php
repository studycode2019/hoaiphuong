<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class phieuchi extends Model
{
    protected $table = 'PHIEUCHI';
    
    public function rlsNhanvien()
    {
        return $this->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
}
