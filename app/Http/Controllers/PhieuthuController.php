<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Model\khachhang;
use App\Model\phieuthu;
use App\Model\phieuthu_danhmuc;
use App\Model\nhanvien;

class PhieuthuController extends Controller
{
    public function getNhapphieuthu($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['nhanviens'] = nhanvien::all();
        $data['phieuthudanhmucs'] = phieuthu_danhmuc::all();
        return view('phieuthu-nhap', $data);
    }
    
    public function postNhapphieuthu(Request $request) {
        
        $data = new phieuthu;
        $data->solai = 1;
        $data->khachhang_id = $request->inputKhachhang;
        $data->nhanvien_id = $request->inputNhanvien;
        $data->phieuthu_danhmuc_id = $request->inputPhieuthuDanhmuc;
        $data->noidung = $request->inputNoidung;
        $data->sotien = $request->inputSotien;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        $data->solai = $data->id;
        $data->save();
        
        return redirect('/xemphieuthu/'.$data->id);
    }
    
    public function getDanhsach($danhmuc_id = NULL) {
        if(isset($danhmuc_id)) {
            $data['danhmuc'] = phieuthu_danhmuc::findOrFail($danhmuc_id);
            $data['phieuthus'] = phieuthu_danhmuc::findOrFail($danhmuc_id)->rlsPhieuthu;
        } else {
            $data['phieuthus'] = phieuthu::all();
        }
        
        return view('phieuthu-danhsach', $data);
    }
    
    public function getXemphieuthu($phieuthu_id) {
        $data['phieuthu'] = phieuthu::findOrFail($phieuthu_id);
        return view('phieuthu-xem', $data);
    }
    
    public function getInphieuthu($phieuthu_id) {
        $data['phieuthu'] = phieuthu::findOrFail($phieuthu_id);
        return view('phieuthu-in', $data);
    }
}
