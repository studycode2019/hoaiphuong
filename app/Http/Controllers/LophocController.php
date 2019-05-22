<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;   

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
        $data->sobuoi = $request->inputSobuoi;
        $data->khaigiang = $request->inputKhaigiang;
        $data->lichhoc = $request->inputLichhoc;
        $data->giangvien = $request->inputGiangvien;
        $data->hocphi = $request->inputHocphi;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        
        return redirect('lophoc')->with('success', 'Đã thêm thành công!');
    }

    public function getSualophoc($lophoc_id) {
        $lophoc = lophoc::findOrFail($lophoc_id);
        $data['lophoc'] = $lophoc;
        return view('lophoc-sua', $data);
    }
    
    public function postSualophoc(Request $request) {
        $data = lophoc::findOrFail($request->inputLophocId);
        $data->ten = $request->inputTen;
        $data->malophoc = $request->inputMalophoc;
        $data->sobuoi = $request->inputSobuoi;
        $data->khaigiang = $request->inputKhaigiang;
        $data->lichhoc = $request->inputLichhoc;
        $data->giangvien = $request->inputGiangvien;
        $data->hocphi = $request->inputHocphi;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        
        return redirect('lophoc')->with('success', 'Lưu thay đổi thành công!');
    }
    
    public function getThemhocvien($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['lophocs'] = lophoc::all();
        return view('lophoc-themhocvien', $data);
    }
    
    public function postThemhocvien(Request $req){
        $lophoc = lophoc::findOrFail($req->inputLophocId);
        if(count($lophoc->rlsDanhsach)>=$lophoc->siso) {
            return Redirect::back()->withInput(Input::all())->withErrors(['Lớp này đã đủ sỉ số, hãy chọn lớp khác hoặc sửa thông tin lớp!']); 
        }
        $khachhang = khachhang::findOrFail($req->inputKhachhangId);
        $danhsach = danhsach::where('khachhang_id', $req->inputKhachhangId)->where('lophoc_id', $req->inputLophocId)->get();
        if(count($danhsach) == 0) {
            $khachhang = khachhang::findOrFail($req->inputKhachhangId);
            $danhsach = new danhsach;
            $danhsach->khachhang_id = $khachhang->id;
            $danhsach->lophoc_id = $lophoc->id;
            $danhsach->uudai = $req->inputUudai;
            $danhsach->dadong = $req->inputDadong;
            $danhsach->ghichu = $req->inputGhichu;
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

    public function getSuahocvien($danhsach_id) {
        $data['danhsach'] = danhsach::findOrFail($danhsach_id);
        $data['lophocs'] = lophoc::all();
        return view('lophoc-suahocvien', $data); 
    }

    public function postSuahocvien(Request $req) {
        $danhsach = danhsach::findOrFail($req->inputDanhsachId);
        $danhsach->lophoc_id = $req->inputLophocId;
        $danhsach->uudai = $req->inputUudai;
        $danhsach->dadong = $req->inputDadong;
        $danhsach->ghichu = $req->inputGhichu;
        $danhsach->save();

        return redirect('xemlophoc/'.$danhsach->lophoc_id)->with('success', 'Sửa thông tin thành công!');
    }

    public function getXoahocvien($danhsach_id) {
        $danhsach = danhsach::findOrFail($danhsach_id);
        $danhsach->delete();

        return redirect('xemlophoc/'.$danhsach->lophoc_id)->with('success', 'Đã xóa khỏi lớp thành công!');
    }
}
