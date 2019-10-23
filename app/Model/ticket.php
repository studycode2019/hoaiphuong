<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public $timestamps = true;
    public $table = '_tickets';
    public $fillable = ['client_id', 'staff_id', 'requestment', 'model', 'cpu', 'ram', 'storage', 'other', 'note', 'ticket_status_id'];
    
    public function client()
    {
        return $this->belongsTo('App\Model\client');
    }
    
    public function staff()
    {
        return $this->belongsTo('App\Model\staff');
    }
    
    public function ticketLogs()
    {
        return $this->hasMany('App\Model\ticket_log')->orderBy('id', 'desc');
    }
    
    public function ticketStatus()
    {
        return $this->belongsTo('App\Model\ticket_status');
    }
}
