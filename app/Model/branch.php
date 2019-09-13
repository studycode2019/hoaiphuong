<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table = '_branch';
    protected $fillable = ['id', 'name'];
    
    public function rlsPhieuthu()
    {
        return $this->hasMany('App\Model\phieuthu');
    }

    public function rlsPhieuchi()
    {
        return $this->hasMany('App\Model\phieuchi');
    }
}
