<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Model\payment;
use App\Model\client;
use App\Model\staff;
use App\Model\field;
use App\Model\branch;

class PaymentController extends Controller
{
    public function getList() {
        $data['phieuchis'] = payment::all();
        
        return view('phieuchi-danhsach', $data);
    }

    public function getAdd($khachhang_id) {
        // if(UserInfo()->level<3) {
        //     return Redirect::back();
        // }
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['branches'] = branch::all();
        $data['phieuthudanhmucs'] = field::all();
        return view('phieuchi-nhap', $data);
    }
    
    public function postAdd(Request $request) {
        $phieuchi = payment::where('branch_id',$request->branch_id)->latest('created_at')->first();
        $data = new payment;
        $data->solai = (isset($phieuchi->solai))? ($phieuchi->solai) + 1 : 1;
        $data->ten = $request->inputKhachhang;
        $data->nhanvien_id = UserInfo()->id;
        $data->noidung = $request->inputNoidung;
        $data->sotien = $request->inputSotien;
        $data->ghichu = $request->inputGhichu;
        $data->phieuthu_danhmuc_id = $request->inputPhieuthuDanhmuc;
        $data->branch_id = $request->branch_id;
        $data->save();
        
        return redirect()->route('staff.payment.view.get', ['payment_id' => $data->id]);
    }
    
    public function getView($phieuchi_id) {
        $data['phieuchi'] = payment::findOrFail($phieuchi_id);
        return view('phieuchi-xem', $data);
    }
}
