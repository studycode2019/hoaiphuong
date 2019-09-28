<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ticket_log extends Model
{
    public $timestamps = true;
    protected $table = '_ticket_logs';
    protected $fillable = ['id','biennhan_id','nhanvien_id','noidung', 'congkhai'];
    
    public function staff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    public function ticket()
    {
        return $this->belongsTo('App\Model\ticket', 'biennhan_id');
    }
}
