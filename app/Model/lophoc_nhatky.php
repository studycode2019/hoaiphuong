<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\lophoc;
use App\Model\khachhang;

class lophoc_nhatky extends Model
{
    public $timestamps = true;
    protected $table = 'LOPHOC_NHATKY';
    
    public function rlsNhanvien()
    {
        return $this->belongsTo('App\Model\nhanvien', 'nhanvien_id');
    }
    
    public function rlsKhachhang()
    {
        return $this->belongsTo('App\Model\khachhang', 'khachhang_id');
    }
    
    public function rlsLophoc1()
    {
        return $this->belongsTo('App\Model\lophoc', 'lophoc1_id');
    }

    public function rlsLophoc2()
    {
        return $this->belongsTo('App\Model\lophoc', 'lophoc2_id');
    }

    public function setAddClass($class_id) {
        $lophoc =  lophoc::findOrFail($class_id);
        $this->nhanvien_id = UserInfo()->id;
        $this->lophoc1_id = $lophoc->id;
        $this->noidung = 'Đã tạo lớp '.$lophoc->linkName();
        $this->save();
    }

    public function setAddStudent($client_id, $class1_id) {
        $lophoc1 =  lophoc::findOrFail($class1_id);
        $khachhang =  khachhang::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->noidung = 'Đã thêm '.$khachhang->linkName().' vào lớp '.$lophoc1->linkName();
        $this->save();
    }

    public function setChange($client_id, $class1_id, $class2_id, $content) {
        $lophoc1 =  lophoc::findOrFail($class1_id);
        $lophoc2 =  lophoc::findOrFail($class2_id);
        $khachhang =  khachhang::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->lophoc2_id = $class2_id;
        $this->noidung = $content;
        $this->save();
    }
    
    public function setDelete($client_id, $class1_id) {
        $lophoc1 =  lophoc::findOrFail($class1_id);
        $khachhang =  khachhang::findOrFail($client_id);

        $this->nhanvien_id = UserInfo()->id;
        $this->khachhang_id = $client_id;
        $this->lophoc1_id = $class1_id;
        $this->noidung = 'Đã xoá '.$khachhang->linkName().' khỏi lớp '.$lophoc1->linkName();
        $this->save();
    }


}
