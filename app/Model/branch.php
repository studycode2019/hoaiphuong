<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table = '_branch';
    protected $fillable = ['id', 'name'];
    
    public function rlsReceipt()
    {
        return $this->hasMany('App\Model\receipt');
    }

    public function rlsPayment()
    {
        return $this->hasMany('App\Model\payment');
    }
}
