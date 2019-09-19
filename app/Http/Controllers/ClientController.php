<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\client;
use App\Model\cases;
use App\Model\class_list;

class ClientController extends Controller
{
    public function getList() {
        if(UserInfo()->level<3) {
            return Redirect::back();
        }
        $data['khachhangs'] = client::all();
        return view('khachhang-danhsach', $data);
    }

    public function getSearch() {
        return view('timkhachhang');
    }
    
    public function getView($khachhang_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['biennhans'] = cases::where('khachhang_id', $khachhang_id)->get();;
        $data['lophocs'] = class_list::where('khachhang_id', $khachhang_id)->get();
        return view('khachhang-xem', $data);
    }
    
    public function postSearch(Request $request) {
        $khachhang = client::where('sdt', $request->inputSdt)->first();
        if (!$khachhang) { //Nếu đã có trong csdl -> nhapbiennhan
            return redirect()->route('staff.client.view.get', ['client_id'=>$khachhang->id]);
        } else {   //Nếu chưa có sdt này trong csdl -> nhapkhachhang
            $data['outSdt'] = $request->inputSdt;
            return view('khachhang-nhap', $data);
        }
    }
    
    public function postAdd(Request $request) {
        $khachhang = new client;
        $khachhang->ten = $request->ten;
        $khachhang->sdt = $request->sdt;
        $khachhang->ngaysinh = $request->ngaysinh;
        $khachhang->zalo = $request->zalo;
        $khachhang->email = $request->email;
        $khachhang->nganhhoc = $request->nganhhoc;
        $khachhang->save();
        
        $data['khachhang'] = $khachhang;
        $data['outStt'] = cases::orderBy('id', 'desc')->first()->id+1;
        // return view('biennhan-nhap', $data);
        return redirect()->route('staff.client.view.get', ['client_id'=>$khachhang->id]);
    }
    
    public function getEdit($khachhang_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        return view('khachhang-sua', $data);
    }
    
    public function postEdit(Request $request) {
        $khachhang = client::findOrFail($request->inputKhachhang);
        $khachhang->ten = $request->inputTen;
        $khachhang->sdt = $request->inputSdt;
        $khachhang->ngaysinh = $request->inputNgaysinh;
        $khachhang->zalo = $request->inputZalo;
        $khachhang->email = $request->inputEmail;
        $khachhang->nganhhoc = $request->inputNganhhoc;
        $khachhang->save();
        
        return redirect()->route('staff.client.view.get', ['client_id'=>$khachhang->id])->with('success', 'Đã cập nhật thành công!');
    }
}
