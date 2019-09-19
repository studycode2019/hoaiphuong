<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;   

use App\Http\Requests;
use App\Model\client;
use App\Model\classes;
use App\Model\class_list;
use App\Model\class_log;

class ClassesController extends Controller
{
    
    public function getList() {
        $data['lophocs'] = classes::all();
        return view('lophoc-danhsach', $data);
    }
    
    public function getAdd() {
        return view('lophoc-nhap');
    }
    
    public function postAdd(Request $request) {
        $data = new classes;
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
        $lnhatky = new class_log;
        $lnhatky->setAddClass($data->id);

        
        return redirect()->route('staff.classes.list.get')->with('success', 'Đã thêm thành công!');
    }

    public function getEdit($lophoc_id) {
        $lophoc = classes::findOrFail($lophoc_id);
        $data['lophoc'] = $lophoc;
        return view('lophoc-sua', $data);
    }
    
    public function postSualophoc(Request $request) {
        $data = classes::findOrFail($request->inputLophocId);
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
    
    public function getThemhocvienVaolop($khachhang_id, $lophoc_id) {
        $khachhang = client::findOrFail($khachhang_id);
        $lophoc = classes::findOrFail($lophoc_id);
        $danhsach = new class_list;
        $danhsach->khachhang_id = $khachhang->id;
        $danhsach->lophoc_id = $lophoc->id;
        $danhsach->save();
        
        return redirect('xemlophoc/'.$lophoc->id)->with('success', 'Đã thêm thành công!');
    }
    
    public function getView($lophoc_id) {
        $data['lophoc'] = classes::findOrFail($lophoc_id);
        $data['danhsachs'] = class_list::where('lophoc_id', $lophoc_id)->get();
        
        return view('lophoc-danhsachlop', $data);
    }

    public function getDanhsachsdt($lophoc_id) {
        $data['lophoc'] = classes::findOrFail($lophoc_id);
        $data['danhsachs'] = class_list::where('lophoc_id', $lophoc_id)->get();
        
        return view('lophoc-danhsachsdt', $data);
    }

    public function getNhatky() {
        $data['nhatkys'] = class_log::all();
        return view('lophoc-nhatky', $data);
    }

    public function getXuatexcel($lophoc_id) {
        $data['lophoc'] = classes::findOrFail($lophoc_id);
        $data['danhsachs'] = $data['lophoc']->rlsDanhsach;
        return view('lophoc-xuatexcel', $data);
    }
}
