<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    public $timestamps = true;
    public $table = '_courses';
    public $dates = ['deleted_at'];
    public $fillable = ['name', 'shortname', 'lesson', 'opening_at', 'schedule', 'maxseat', 'teacher', 'tuition', 'note'];
    
    public function courseStudents()
    {
        return $this->hasMany('App\Model\course_student');
    }

    public function linkName() {
        return '<a href="'.route('staff.course.view.get', ['course_id' => $this->id], false).'">'.$this->name.'</a>';
    }

    public function sum() {
        return count($this->courseStudents);
    }

    public function isFull()
    {
        return ($this->sum() >= $this->maxseat);
    }
}
