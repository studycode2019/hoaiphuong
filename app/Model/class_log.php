<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\classes;
use App\Model\client;

class class_log extends Model
{
    public $timestamps = true;
    protected $table = '_class_log';
    
    public function rlsStaff()
    {
        return $this->belongsTo('App\Model\staff', 'nhanvien_id');
    }
    
    public function rlsClient()
    {
        return $this->belongsTo('App\Model\client', 'khachhang_id');
    }
    
    public function rlsClasses1()
    {
        return $this->belongsTo('App\Model\classes', 'lophoc1_id');
    }

    public function rlsClasses2()
    {
        return $this->belongsTo('App\Model\classes', 'lophoc2_id');
    }

    public function setAddClass($class_id) {
        $lophoc =  classes::findOrFail($class_id);
        $this->nhanvien_id = UserInfo()->id;
        $this->lophoc1_id = $lophoc->id;
        $this->noidung = 'Đã tạo lớp '.$lophoc->linkName();
        $this->save();
    }

    public function setAddStudent($client_id, $class1_id) {
        $lophoc1 =  classes::findOrFail($class1_id);
        $khachhang =  client::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->noidung = 'Đã thêm '.$khachhang->linkName().' vào lớp '.$lophoc1->linkName();
        $this->save();
    }

    public function setChange($client_id, $class1_id, $class2_id, $content) {
        $lophoc1 =  classes::findOrFail($class1_id);
        $lophoc2 =  classes::findOrFail($class2_id);
        $khachhang =  client::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->lophoc2_id = $class2_id;
        $this->noidung = $content;
        $this->save();
    }
    
    public function setDelete($client_id, $class1_id) {
        $lophoc1 =  classes::findOrFail($class1_id);
        $khachhang =  client::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->noidung = 'Đã xoá '.$khachhang->linkName().' khỏi lớp '.$lophoc1->linkName();
        $this->save();
    }


}
