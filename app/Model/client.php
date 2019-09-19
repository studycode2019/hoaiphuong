<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public $timestamps = true;
    protected $table = '_client';
    protected $fillable = ['id','ten','sdt','ngaysinh'];
    
    public function rlsCases()
    {
        return $this->hasMany('App\Model\cases');
    }
    public function rlsReceipt()
    {
        return $this->hasMany('App\Model\receipt');
    }
    public function rlsClassList()
    {
        return $this->hasMany('App\Model\class_list');
    }

    public function linkName() {
        return '<a href="'.route('staff.client.view.get', ['client_id' => $this->id], false).'">'.$this->ten.'</a>';
    }

    public function linkPhone() {
        return '<a href="tel:'.$this->sdt.'">'.$this->sdt.'</a>';
    }
}
