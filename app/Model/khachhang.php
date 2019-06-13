<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    public $timestamps = true;
    protected $table = 'KHACHHANG';
    protected $fillable = ['id','ten','sdt','ngaysinh'];
    
    public function rlsBiennhan()
    {
        return $this->hasMany('App\Model\biennhan');
    }
    public function rlsPhieuthu()
    {
        return $this->hasMany('App\Model\phieuthu');
    }
    public function rlsDanhsachlop()
    {
        return $this->hasMany('App\Model\danhsachlop');
    }

    public function linkName() {
        return '<a href="'.route('g.khachhang.xem', ['khachhang_id' => $this->id], false).'">'.$this->ten.'</a>';
    }
}
