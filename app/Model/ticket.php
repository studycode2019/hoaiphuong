<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public $timestamps = true;
    protected $table = '_tickets';
    
    public function client()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function staff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    
    public function ticketLogs()
    {
        return $this->hasMany('App\Model\ticket_log', 'biennhan_id');
    }
    
    public function ticketStatus()
    {
        return $this->belongsTo('App\Model\ticket_status', 'tiendo');
    }
}
