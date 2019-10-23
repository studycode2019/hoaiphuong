<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public $timestamps = true;
    public $table = '_clients';
    public $fillable = ['phone', 'name', 'birthday', 'zalo', 'major', 'email'];
    
    public function tickets()
    {
        return $this->hasMany('App\Model\ticket');
    }
    public function receipts()
    {
        return $this->hasMany('App\Model\receipt');
    }
    public function courseStudents()
    {
        return $this->hasMany('App\Model\course_student');
    }

    public function linkName() {
        return '<a href="'.route('staff.client.view.get', ['client_id' => $this->id], false).'">'.$this->name.'</a>';
    }

    public function linkPhone() {
        return '<a href="tel:'.$this->phone.'">'.$this->phone.'</a>';
    }
}
