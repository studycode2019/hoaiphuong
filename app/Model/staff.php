<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class staff extends Authenticatable
{
    protected $table = '_staff';
    protected $fillable = ['id', 'sdt', 'ten', 'ngaysinh'];
    protected $hidden = [
        'matkhau', 'remember_token'
    ];
    public function username()
    {
        return 'sdt';
    }
    public function getAuthPassword()
    {
        return $this->matkhau;
    }
    public function rlsBiennhan() {
        return $this->hasMany('App\Model\biennhan');
    }
    public function rlsPhieuthu() {
        return $this->hasMany('App\Model\phieuthu');
    }
    public function rlsGroup()
    {
        return $this->belongsTo('App\Model\group', 'group_id');
    }
}