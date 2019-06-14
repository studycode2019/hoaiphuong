<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;   

use App\Http\Requests;
use App\Model\khachhang;
use App\Model\lophoc;
use App\Model\lophoc_danhsach as danhsach;
use App\Model\lophoc_nhatky as lnhatky;

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
        $data->siso = $request->inputSiso;
        $data->hocphi = $request->inputHocphi;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        $lnhatky = new lnhatky;
        $lnhatky->setAdd($data->id);

        
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
        $data->siso = $request->inputSiso;
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
            $danhsach->ghichu2 = $req->inputGhichu2;
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

    public function getDanhsachsdt($lophoc_id) {
        $data['lophoc'] = lophoc::findOrFail($lophoc_id);
        $data['danhsachs'] = danhsach::where('lophoc_id', $lophoc_id)->get();
        
        return view('lophoc-danhsachsdt', $data);
    }

    public function getSuahocvien($danhsach_id) {
        $data['danhsach'] = danhsach::findOrFail($danhsach_id);
        $data['lophocs'] = lophoc::all();
        return view('lophoc-suahocvien', $data); 
    }

    public function postSuahocvien(Request $req) {
        $danhsach = danhsach::findOrFail($req->inputDanhsachId);
        $lophoc1 =  lophoc::findOrFail($danhsach->lophoc_id);
        $lophoc2 =  lophoc::findOrFail($req->inputLophocId);
        $khachhang = khachhang::findOrFail($danhsach->khachhang_id);
        $noidung = "";
        if($danhsach->lophoc_id != $req->inputLophocId) {
            $noidung .= 'Đã chuyển '.$khachhang->linkName().' từ lớp '.$lophoc1->linkName().' sang lớp '.$lophoc2->linkName().'<br />';
            $khachhang_id = $danhsach->khachhang_id;
            $danhsach->delete();
            $danhsach = new danhsach;
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

        $lnhatky = new lnhatky;
        $lnhatky->setChange($danhsach->khachhang_id, $lophoc1->id, $lophoc2->id, $noidung);
        return redirect('xemlophoc/'.$danhsach->lophoc_id)->with('success', 'Sửa thông tin thành công!');
    }

    public function getXoahocvien($danhsach_id) {
        $danhsach = danhsach::findOrFail($danhsach_id);
        $lnhatky = new lnhatky;
        $lnhatky->setDelete($danhsach->khachhang_id, $danhsach->lophoc_id);
        $danhsach->delete();

        return redirect('xemlophoc/'.$danhsach->lophoc_id)->with('success', 'Đã xóa khỏi lớp thành công!');
    }

    public function getNhatky() {
        $data['nhatkys'] = lnhatky::all();
        return view('lophoc-nhatky', $data);
    }
}
