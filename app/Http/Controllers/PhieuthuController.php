<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Model\khachhang;
use App\Model\phieuthu;
use App\Model\phieuthu_danhmuc;
use App\Model\nhanvien;
use App\Model\branch;

class PhieuthuController extends Controller
{
    public function getNhapphieuthu($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['branches'] = branch::all();
        $data['phieuthudanhmucs'] = phieuthu_danhmuc::all();
        return view('phieuthu-nhap', $data);
    }
    
    public function postNhapphieuthu(Request $request) 
    {
        $phieuthu = phieuthu::where('branch_id',$request->branch_id)->latest('created_at')->first();
        // return ($phieuthu->solai) + 1;
        $data = new phieuthu;
        $data->solai = (isset($phieuthu->solai))? ($phieuthu->solai) + 1 : 1;
        $data->khachhang_id = $request->inputKhachhang;
        $data->nhanvien_id = UserInfo()->id;
        $data->phieuthu_danhmuc_id = $request->inputPhieuthuDanhmuc;
        $data->branch_id = $request->branch_id;
        $data->noidung = $request->inputNoidung;
        $data->sotien = $request->inputSotien;
        $data->ghichu = $request->inputGhichu;
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
