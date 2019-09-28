<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table = '_branches';
    protected $fillable = ['id', 'name'];
    
    public function reciepts()
    {
        return $this->hasMany('App\Model\receipt');
    }

    public function payments()
    {
        return $this->hasMany('App\Model\payment');
    }
}
