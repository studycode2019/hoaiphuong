<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Model\phieuchi;
use App\Model\khachhang;
use App\Model\nhanvien;
use App\Model\phieuthu_danhmuc;
use App\Model\branch;

class PhieuchiController extends Controller
{
    public function getDanhsach() {
        $data['phieuchis'] = phieuchi::all();
        
        return view('phieuchi-danhsach', $data);
    }

    public function getNhapphieuchi($khachhang_id) {
        // if(UserInfo()->level<3) {
        //     return Redirect::back();
        // }
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['branches'] = branch::all();
        $data['phieuthudanhmucs'] = phieuthu_danhmuc::all();
        return view('phieuchi-nhap', $data);
    }
    
    public function postNhapphieuchi(Request $request) {
        $phieuchi = phieuchi::where('branch_id',$request->branch_id)->latest('created_at')->first();
        $data = new phieuchi;
        $data->solai = (isset($phieuchi->solai))? ($phieuchi->solai) + 1 : 1;
        $data->ten = $request->inputKhachhang;
        $data->nhanvien_id = UserInfo()->id;
        $data->noidung = $request->inputNoidung;
        $data->sotien = $request->inputSotien;
        $data->ghichu = $request->inputGhichu;
        $data->phieuthu_danhmuc_id = $request->inputPhieuthuDanhmuc;
        $data->branch_id = $request->branch_id;
        $data->save();
        
        return redirect('/xemphieuchi/'.$data->id);
    }
    
    public function getXemphieuchi($phieuchi_id) {
        $data['phieuchi'] = phieuchi::findOrFail($phieuchi_id);
        return view('phieuchi-xem', $data);
    }
}
