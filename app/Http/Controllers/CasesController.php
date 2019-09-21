<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\client;
use App\Model\cases;
use App\Model\case_log;
use App\Model\case_status as status;

class CasesController extends Controller
{
    public function getList() { 
        if(UserInfo()->level>=3) {
            $data['biennhans'] =  cases::orderBy('id', 'desc')->get();
        } else {
            $data['biennhans'] =  cases::where('tiendo', '!=', 5)->orderBy('id', 'desc')->get();
        }
        return view('biennhan-danhsach', $data);
    }
    
    public function getChangeStatus($biennhan_id, $trangthai_id) {
        $trangthai = status::findOrFail($trangthai_id);
        $biennhan = cases::findOrFail($biennhan_id);
        $biennhan->tiendo = $trangthai->id;
        $biennhan->save();
        $nhatky = new case_log;
        $nhatky->biennhan_id = $biennhan->id;
        $nhatky->nhanvien_id = UserInfo()->id;
        $nhatky->noidung = "Đã chuyển trang thái thành ".$trangthai->ten;
        $nhatky->congkhai = 0;
        $nhatky->save();
        
        return redirect()->route('staff.cases.view.get', ['case_id' => $biennhan->id]);
    }
    
    public function getView($biennhan_id) {
        $data['biennhan'] = cases::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsClient;
        $data['nhatkys'] = case_log::where('biennhan_id', $biennhan_id)->orderBy('id','desc')->get()->take(10);
        $data['trangthais'] = status::all();
        return view('biennhan-xem', $data);
    }
    public function getPrint($biennhan_id) {
        $data['biennhan'] = cases::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsClient;
        return view('biennhan-in', $data);
    }

    public function getPrintPos($biennhan_id) {
        $data['biennhan'] = cases::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsClient;
        return view('biennhan-inpos', $data);
    }
    
    public function getPrintInternal($biennhan_id) {
        $data['biennhan'] = cases::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsClient;
        return view('biennhan-inluu', $data);
    }
    
    public function getAdd($khachhang_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['biennhans'] = $data['khachhang']->rlsCases;
        return view('biennhan-nhap', $data);
    }
    
    public function postAdd(Request $request) {
        $biennhan = new cases;
        $biennhan->khachhang_id = $request->inputKhachhang;
        $biennhan->nhanvien_id = UserInfo()->id;
        $biennhan->yeucau = $request->inputYeucau;
        $biennhan->dongmay = $request->inputDongmay;
        $biennhan->cpu = $request->inputCpu;
        $biennhan->ram = $request->inputRam;
        $biennhan->ocung = $request->inputOcung;
        $biennhan->tinhtrang = $request->inputTinhtrang;
        $biennhan->khac = $request->inputPhukien;
        $biennhan->save();
        $nhatky = new case_log;
        $nhatky->biennhan_id = $biennhan->id;
        $nhatky->nhanvien_id = UserInfo()->id;
        $nhatky->noidung = "Đang chờ xử lý.";
        $nhatky->congkhai = 1;
        $nhatky->save();
        
        return redirect()->route('staff.cases.view.get', ['case_id' => $biennhan->id]);
    }
    
    public function getUseOld($khachhang_id, $biennhan_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['outStt'] = cases::orderBy('id', 'desc')->first()->id+1;
        $data['biennhans'] = $data['khachhang']->rlsCases;
        $data['biennhancu'] = cases::findOrFail($biennhan_id);
        return view('biennhan-nhap', $data);
    }
    
    public function getEdit($biennhan_id) {
        $data['biennhan'] = cases::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsClient;
        return view('biennhan-sua', $data);
    }
    
    public function postEdit(Request $request) {
        $biennhan = cases::find($request->inputStt);
        $biennhan->khachhang_id = $request->inputKhachhang;
        $biennhan->yeucau = $request->inputYeucau;
        $biennhan->dongmay = $request->inputDongmay;
        $biennhan->cpu = $request->inputCpu;
        $biennhan->ram = $request->inputRam;
        $biennhan->ocung = $request->inputOcung;
        $biennhan->tinhtrang = $request->inputTinhtrang;
        $biennhan->khac = $request->inputPhukien;
        $biennhan->save();
        
        return redirect()->route('staff.cases.view.get', ['case_id' => $biennhan->id])->with('success', 'Đã cập nhật thành công!');
    }
}
