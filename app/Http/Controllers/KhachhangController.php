<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\khachhang;
use App\Model\biennhan;
use App\Model\lophoc_danhsach as danhsach;

class KhachhangController extends Controller
{
    public function getDanhsach() {
        if(UserInfo()->level<3) {
            return Redirect::back();
        }
        $data['khachhangs'] = khachhang::all();
        return view('khachhang-danhsach', $data);
    }
    public function getTimkhachhang() {
        return view('timkhachhang');
    }
    
    public function getXemkhachhang($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['biennhans'] = $data['khachhang']->rlsBiennhan;
        $data['lophocs'] = danhsach::where('khachhang_id', $khachhang_id)->get();
        return view('khachhang-xem', $data);
    }
    
    public function postTimkhachhang(Request $request) {
        $khachhang = khachhang::where('sdt', $request->inputSdt)->first();
        if (!$khachhang) { //Nếu đã có trong csdl -> nhapbiennhan
            return redirect('/nhapbiennhan/'.$khachhang->id);
        } else {   //Nếu chưa có sdt này trong csdl -> nhapkhachhang
            $data['outSdt'] = $request->inputSdt;
            return view('khachhang-nhap', $data);
        }
    }
    
    public function postNhapkhachhang(Request $request) {
        $khachhang = new khachhang;
        $khachhang->ten = $request->ten;
        $khachhang->sdt = $request->sdt;
        $khachhang->ngaysinh = $request->ngaysinh;
        $khachhang->zalo = $request->zalo;
        $khachhang->email = $request->email;
        $khachhang->nganhhoc = $request->nganhhoc;
        $khachhang->save();
        
        $data['khachhang'] = $khachhang;
        $data['outStt'] = biennhan::orderBy('id', 'desc')->first()->id+1;
        // return view('biennhan-nhap', $data);
        return redirect('xemkhachhang/'.$khachhang->id);
    }
    
    public function getSuakhachhang($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        return view('khachhang-sua', $data);
    }
    
    public function postSuakhachhang(Request $request) {
        $khachhang = khachhang::findOrFail($request->inputKhachhang);
        $khachhang->ten = $request->inputTen;
        $khachhang->sdt = $request->inputSdt;
        $khachhang->ngaysinh = $request->inputNgaysinh;
        $khachhang->zalo = $request->inputZalo;
        $khachhang->email = $request->inputEmail;
        $khachhang->nganhhoc = $request->inputNganhhoc;
        $khachhang->save();
        
        return redirect('/xemkhachhang/'.$khachhang->id)->with('success', 'Đã cập nhật thành công!');
    }
    
    public function postNhapbiennhan(Request $request) {
        $biennhan = new biennhan;
        $biennhan->khachhang_id = $request->inputKhachhang;
        $biennhan->yeucau = $request->inputYeucau;
        $biennhan->dongmay = $request->inputDongmay;
        $biennhan->cpu = $request->inputCpu;
        $biennhan->ram = $request->inputRam;
        $biennhan->ocung = $request->inputOcung;
        $biennhan->khac = $request->inputThongtin;
        $biennhan->save();
        
        $data['khachhang'] = $khachhang;
        return view('biennhan-in', $data);
    }
}
