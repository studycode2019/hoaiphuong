<?php

namespace App\Http\Controllers;
use Redirect;
use Hash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\nhanvien;

class NhanvienController extends Controller
{
    public function getCanhan() {
        return view('nhanvien-canhan');
    }
    
    public function postSuacanhan(Request $request) {
        $data = nhanvien::find(UserInfo()->id);
        if (strlen($request->inputMatkhau) > 0) {
            if ($request->inputMatkhau == $request->inputReMatkhau) {
                $data->matkhau =Hash::make($request->inputMatkhau);
            } else {
                return Redirect::back()->withErrors(['Mật khẩu nhập lại không đúng!']);
            }
        } 
        $data->sdt = $request->inputSdt;
        $data->ten = $request->inputTen;
        $data->ngaysinh = $request->inputNgaysinh;
        $data->save();
        
        return redirect('/nhanvien/canhan');
    }
}
