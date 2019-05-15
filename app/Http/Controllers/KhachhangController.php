<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\khachhang;
use App\Model\biennhan;

class KhachhangController extends Controller
{
    public function getDanhsach() {
        $data['khachhangs'] = khachhang::all();
        return view('khachhang-danhsach', $data);
    }
    public function getTimkhachhang() {
        return view('timkhachhang');
    }
    
    public function getXemkhachhang($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['biennhans'] = $data['khachhang']->rlsBiennhan;
        return view('khachhang-xem', $data);
        // echo $data['khachhang'];
    }
    
    public function postTimkhachhang(Request $request) {
        $khachhang = khachhang::where('sdt', $request->inputSdt)->first();
        if (!$khachhang) {                        //Nếu đã có trong csdl -> nhapbiennhan
            $data['khachhang'] = $khachhang;
            $data['outStt'] = biennhan::orderBy('id', 'desc')->first()->id+1;
            return view('biennhan-nhap', $data);
        } else {   //Nếu chưa có sdt này trong csdl -> nhapkhachhang
            $data['outSdt'] = $request->inputSdt;
            return view('khachhang-nhap', $data);
        }
    }
    
    public function postNhapkhachhang(Request $request) {
        $khachhang = new khachhang;
        $khachhang->ten = $request->inputTen;
        $khachhang->sdt = $request->inputSdt;
        $khachhang->ngaysinh = $request->inputNgaysinh;
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
        $data = khachhang::findOrFail($request->inputKhachhang);
        $data->ten = $request->inputTen;
        $data->sdt = $request->inputSdt;
        $data->ngaysinh = $request->inputNgaysinh;
        $data->save();
        
        return redirect('/xemkhachhang/'.$data->id)->with('success', 'Đã cập nhật thành công!');
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
        // $data['outStt'] = biennhan::orderBy('id', 'desc')->first()->id+1;
        return view('biennhan-in', $data);
    }
}
