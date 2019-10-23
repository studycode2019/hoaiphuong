<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\course;
use App\Model\client;

class course_log extends Model
{
    public $timestamps = true;
    protected $table = '_course_logs';
    
    public function staff()
    {
        return $this->belongsTo('App\Model\staff');
    }
    
    public function client()
    {
        return $this->belongsTo('App\Model\client');
    }
    
    public function course1()
    {
        return $this->belongsTo('App\Model\course');
    }

    public function course2()
    {
        return $this->belongsTo('App\Model\course');
    }

    public function setAddClass($class_id) {
        $lophoc =  course::findOrFail($class_id);
        $this->nhanvien_id = UserInfo()->id;
        $this->lophoc1_id = $lophoc->id;
        $this->noidung = 'Đã tạo lớp '.$lophoc->linkName();
        $this->save();
    }

    public function setAddStudent($client_id, $class1_id) {
        $lophoc1 =  course::findOrFail($class1_id);
        $khachhang =  client::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->noidung = 'Đã thêm '.$khachhang->linkName().' vào lớp '.$lophoc1->linkName();
        $this->save();
    }

    public function setChange($client_id, $class1_id, $class2_id, $content) {
        $lophoc1 =  course::findOrFail($class1_id);
        $lophoc2 =  course::findOrFail($class2_id);
        $khachhang =  client::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->lophoc2_id = $class2_id;
        $this->noidung = $content;
        $this->save();
    }
    
    public function setDelete($client_id, $class1_id) {
        $lophoc1 =  course::findOrFail($class1_id);
        $khachhang =  client::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->noidung = 'Đã xoá '.$khachhang->linkName().' khỏi lớp '.$lophoc1->linkName();
        $this->save();
    }


}
