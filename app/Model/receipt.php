<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    public $table = '_receipts';
    public $fillable = ['id', 'number', 'client_id', 'staff_id', 'field_id', 'branch_id', 'content', 'amount'];
    
    public function staff()
    {
        return $this->belongsTo('App\Model\staff');
    }
    
    public function client()
    {
        return $this->belongsTo('App\Model\client');
    }
    
    public function field()
    {
        return $this->belongsTo('App\Model\field');
    }
    
    public function branch()
    {
        return $this->belongsTo('App\Model\branch');
    }
    
}
