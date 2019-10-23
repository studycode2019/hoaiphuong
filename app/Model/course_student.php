<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course_student extends Model
{
    public $timestamps = true;
    protected $table = '_course_students';
    protected $dates = ['deleted_at'];
    public $fillable = ['client_id', 'course_id', 'deal_rate', 'deal_note', 'tuition_done', 'note'];
    
    public function client()
    {
        return $this->belongsTo('App\Model\client');
    }
    
    public function course()
    {
        return $this->belongsTo('App\Model\course');
    }
}
