<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Model\client;
use App\Model\receipt;
use App\Model\field;
use App\Model\staff;
use App\Model\branch;

class ReceiptController extends Controller
{
    public function getAdd($khachhang_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['branches'] = branch::all();
        $data['nhanviens'] = staff::all();
        $data['phieuthudanhmucs'] = field::all();
        return view('phieuthu-nhap', $data);
    }
    
    public function postAdd(Request $request) 
    {
        $phieuthu = receipt::where('branch_id',$request->branch_id)->latest('created_at')->first();
        // return ($phieuthu->solai) + 1;
        $data = new receipt;
        $data->solai = (isset($phieuthu->solai))? ($phieuthu->solai) + 1 : 1;
        $data->khachhang_id = $request->inputKhachhang;
        $data->nhanvien_id = $request->nhanvien_id;
        $data->phieuthu_danhmuc_id = $request->inputPhieuthuDanhmuc;
        $data->branch_id = $request->branch_id;
        $data->noidung = $request->inputNoidung;
        $data->sotien = $request->inputSotien;
        $data->ghichu = $request->inputGhichu;
        $data->save();
        
        return redirect()->route('staff.receipt.view.get', ['receipt_id' => $data->id]);
    }
    
    public function getList($danhmuc_id = NULL) {
        if(isset($danhmuc_id)) {
            $data['danhmuc'] = field::findOrFail($danhmuc_id);
            $data['phieuthus'] = field::findOrFail($danhmuc_id)->rlsReceipt;
        } else {
            $data['phieuthus'] = receipt::all();
        }
        
        return view('phieuthu-danhsach', $data);
    }
    
    public function getView($phieuthu_id) {
        $data['phieuthu'] = receipt::findOrFail($phieuthu_id);
        return view('phieuthu-xem', $data);
    }
    
    public function getPrint($phieuthu_id) {
        $data['phieuthu'] = receipt::findOrFail($phieuthu_id);
        return view('phieuthu-in', $data);
    }
}
