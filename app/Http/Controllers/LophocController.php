<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\khachhang;
use App\Model\lophoc;
use App\Model\lophoc_danhsach as danhsach;

class LophocController extends Controller
{
    
    public function getDanhsach() {
        $data['lophocs'] = lophoc::all();
        return view('lophoc-danhsach', $data);
    }
    
    public function getNhaplophoc() {
        return view('lophoc-nhap');
    }
    
    public function postNhaplophoc(Request $request) {
        $data = new lophoc;
        $data->ten = $request->inputTen;
        $data->malophoc = $request->inputMalophoc;
        $data->lichhoc = $request->inputLichhoc;
        $data->giangvien = $request->inputGiaovien;
        $data->hocphi = $request->inputHocphi;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        
        return redirect('lophoc')->with('success', 'Đã thêm thành công!');
    }
    
    public function getThemhocvien($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['lophocs'] = lophoc::all();
        return view('lophoc-themhocvien', $data);
    }
    
    public function postThemhocvien(Request $req){
        $danhsach = danhsach::where('khachhang_id', $req->inputKhachhangId)->where('lophoc_id', $req->inputLophocId)->get();
        if(count($danhsach) == 0) {
            $khachhang = khachhang::findOrFail($req->inputKhachhangId);
            $lophoc = lophoc::findOrFail($req->inputLophocId);
            $danhsach = new danhsach;
            $danhsach->khachhang_id = $khachhang->id;
            $danhsach->lophoc_id = $lophoc->id;
            $danhsach->uudai = $req->inputUudai;
            $danhsach->dadong = $req->inputDadong;
            $danhsach->save();
        }
        return redirect('/xemlophoc/'.$req->inputLophocId);
    }
    
    public function getThemhocvienVaolop($khachhang_id, $lophoc_id) {
        $khachhang = khachhang::findOrFail($khachhang_id);
        $lophoc = lophoc::findOrFail($lophoc_id);
        $danhsach = new danhsach;
        $danhsach->khachhang_id = $khachhang->id;
        $danhsach->lophoc_id = $lophoc->id;
        $danhsach->save();
        
        return redirect('xemlophoc/'.$lophoc->id)->with('success', 'Đã thêm thành công!');
    }
    
    public function getXemlophoc($lophoc_id) {
        $data['lophoc'] = lophoc::findOrFail($lophoc_id);
        $data['danhsachs'] = danhsach::where('lophoc_id', $lophoc_id)->get();
        
        return view('lophoc-danhsachlop', $data);
    }
}
