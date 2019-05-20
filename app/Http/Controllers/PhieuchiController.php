<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\phieuchi;
use App\Model\nhanvien;

class PhieuchiController extends Controller
{
    public function getDanhsach() {
        $data['phieuchis'] = phieuchi::all();
        
        return view('phieuchi-danhsach', $data);
    }

    public function getNhapphieuchi() {
        $data['nhanviens'] = nhanvien::all();
        return view('phieuchi-nhap', $data);
    }
    
    public function postNhapphieuchi(Request $request) {
        
        $data = new phieuchi;
        $data->solai = 1;
        $data->ten = $request->inputKhachhang;
        $data->nhanvien_id = $request->inputNhanvien;
        $data->noidung = $request->inputNoidung;
        $data->sotien = $request->inputSotien;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        $data->solai = $data->id;
        $data->save();
        
        return redirect('/xemphieuchi/'.$data->id);
    }
    
    public function getXemphieuchi($phieuchi_id) {
        $data['phieuchi'] = phieuchi::findOrFail($phieuchi_id);
        return view('phieuchi-xem', $data);
    }
}
