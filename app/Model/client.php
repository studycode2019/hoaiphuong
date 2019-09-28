<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public $timestamps = true;
    public $table = '_clients';
    public $fillable = ['sdt', 'ten', 'ngaysinh', 'zalo', 'nganhhoc', 'email'];
    
    public function tickets()
    {
        return $this->hasMany('App\Model\ticket', 'khachhang_id');
    }
    public function receipts()
    {
        return $this->hasMany('App\Model\receipt', 'khachhang_id');
    }
    public function courseStudents()
    {
        return $this->hasMany('App\Model\course_student', 'khachhang_id');
    }

    public function linkName() {
        return '<a href="'.route('staff.client.view.get', ['client_id' => $this->id], false).'">'.$this->ten.'</a>';
    }

    public function linkPhone() {
        return '<a href="tel:'.$this->sdt.'">'.$this->sdt.'</a>';
    }
}
