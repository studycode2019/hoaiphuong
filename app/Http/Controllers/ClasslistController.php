<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\client;
use App\Model\classes;
use App\Model\class_list;
use App\Model\class_log;

class ClasslistController extends Controller
{
    public function getAdd($khachhang_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['lophocs'] = classes::all();
        return view('lophoc-themhocvien', $data);
    }

    public function postAdd(Request $req){
        $lophoc = classes::findOrFail($req->inputLophocId);

        //XỬ LÝ KHI LỚP ĐÃ ĐẦY
        if(count($lophoc->rlsClassList)>=$lophoc->siso) {
            return Redirect::back()->withInput(Input::all())->withErrors(['Lớp này đã đủ sỉ số, hãy chọn lớp khác hoặc sửa thông tin lớp!']); 
        }

        //XỬ LÝ KHI CÒN CHỖ
        $khachhang = client::findOrFail($req->inputKhachhangId);
        $danhsach = class_list::where('khachhang_id', $req->inputKhachhangId)->where('lophoc_id', $req->inputLophocId)->get();
        if(count($danhsach) == 0) {
            $danhsach = new class_list;
            $danhsach->khachhang_id = $khachhang->id;
            $danhsach->lophoc_id = $lophoc->id;
            $danhsach->uudai = $req->inputUudai;
            $danhsach->dadong = $req->inputDadong;
            $danhsach->ghichu = $req->inputGhichu;
            $danhsach->ghichu2 = $req->inputGhichu2;
            $danhsach->save();
            $lnhatky = new class_log;
            $lnhatky->setAddStudent($danhsach->khachhang_id, $danhsach->lophoc_id);
        }
        return redirect()->route('staff.classes.view.get', ['class_id' => $lophoc->id])->with('msg', 'Thêm thành công!');
    }

    public function getEdit($danhsach_id) {
        $data['danhsach'] = class_list::findOrFail($danhsach_id);
        $data['lophocs'] = classes::all();
        return view('lophoc-suahocvien', $data); 
    }

    public function postEdit(Request $req) {
        $danhsach = class_list::findOrFail($req->inputDanhsachId);
        $lophoc1 =  classes::findOrFail($danhsach->lophoc_id);
        $lophoc2 =  classes::findOrFail($req->inputLophocId);
        $khachhang = client::findOrFail($danhsach->khachhang_id);
        $noidung = "";
        if($danhsach->lophoc_id != $req->inputLophocId) {
            $noidung .= 'Đã chuyển '.$khachhang->linkName().' từ lớp '.$lophoc1->linkName().' sang lớp '.$lophoc2->linkName().'<br />';
            $khachhang_id = $danhsach->khachhang_id;
            $danhsach->delete();
            $danhsach = new class_list;
            $danhsach->lophoc_id = $req->inputLophocId;
            $danhsach->khachhang_id = $khachhang_id;
        } 
        if($danhsach->uudai != $req->inputUudai) {
            $noidung .= 'Đã thay đổi mức ưu đãi từ <b>'.MoneyFormat($danhsach->uudai).'%</b> thành <b>'.MoneyFormat($req->inputUudai).'%</b><br />';
            $danhsach->uudai = $req->inputUudai;
        }
        if($danhsach->dadong != $req->inputDadong) {
            $noidung .= 'Đã thay đổi tiền đã đóng từ <b>'.MoneyFormat($danhsach->dadong).'</b> thành <b>'.MoneyFormat($req->inputDadong).'</b><br />';
            $danhsach->dadong = $req->inputDadong;
        }
        if($danhsach->ghichu != $req->inputGhichu) {
            $noidung .= 'Đã thay đổi ưu đãi từ <b>'.$danhsach->ghichu.'</b> thành <b>'.$req->inputGhichu.'</b><br />';
            $danhsach->ghichu = $req->inputGhichu;
        }
        if($danhsach->ghichu2 != $req->inputGhichu2) {
            $noidung .= 'Đã thay đổi ưu đãi từ <b>'.$danhsach->ghichu2.'</b> thành <b>'.$req->inputGhichu2.'</b><br />';
            $danhsach->ghichu2 = $req->inputGhichu2;
        }
        $danhsach->save();

        $lnhatky = new class_log;
        $lnhatky->setChange($danhsach->khachhang_id, $lophoc1->id, $lophoc2->id, $noidung);
        return redirect()->route('staff.classes.view.get', ['class_id' => $danhsach->lophoc_id])->with('success', 'Sửa thông tin thành công!');
    }

    public function getDelete($danhsach_id) {
        $danhsach = class_list::findOrFail($danhsach_id);
        $lnhatky = new class_log;
        $lnhatky->setDelete($danhsach->khachhang_id, $danhsach->lophoc_id);
        $danhsach->delete();

        return redirect()->route('staff.classes.view.get', ['class_id' => $danhsach->lophoc_id])->with('success', 'Đã xóa khỏi lớp thành công!');
    }
}
