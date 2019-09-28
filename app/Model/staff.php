<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class staff extends Authenticatable
{
    protected $table = '_staffs';
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

    public function tickets() {
        return $this->hasMany('App\Model\ticket');
    }

    public function receipts() {
        return $this->hasMany('App\Model\receipt');
    }

    public function group()
    {
        return $this->belongsTo('App\Model\group', 'group_id');
    }
}
