<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = '_payments';
    public $fillable = ['staff_id', 'content', 'number', 'branch_id', 'field_id', 'note', 'amount'];
    
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
