<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\khachhang;
use App\Model\biennhan;
use App\Model\nhatky;
use App\Model\biennhan_trangthai as trangthai;

class BiennhanController extends Controller
{
    public function getDanhsach() {
        $data['biennhans'] =  biennhan::orderBy('id', 'desc')->orderBy('tiendo', 'desc')->get();
        return view('biennhan-danhsach', $data);
    }
    
    public function getDoitrangthai($biennhan_id, $trangthai_id) {
        $trangthai = trangthai::findOrFail($trangthai_id);
        $biennhan = biennhan::findOrFail($biennhan_id);
        $biennhan->tiendo = $trangthai->id;
        $biennhan->save();
        $nhatky = new nhatky;
        $nhatky->biennhan_id = $biennhan->id;
        $nhatky->nhanvien_id = UserInfo()->id;
        $nhatky->noidung = "Đã chuyển trang thái thành ".$trangthai->ten;
        $nhatky->congkhai = 0;
        $nhatky->save();
        
        return redirect('/xembiennhan/'.$biennhan->id);
    }
    
    public function getXembiennhan($biennhan_id) {
        $data['biennhan'] = biennhan::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsKhachhang;
        $data['nhatkys'] = nhatky::where('biennhan_id', $biennhan_id)->orderBy('id','desc')->get()->take(10);
        $data['trangthais'] = trangthai::all();
        return view('biennhan-xem', $data);
    }
    public function getInbiennhan($biennhan_id) {
        $data['biennhan'] = biennhan::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsKhachhang;
        return view('biennhan-in', $data);
    }
    
    public function getNhapbiennhantheosdt($khachhang_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['outStt'] = biennhan::orderBy('id', 'desc')->first()->id+1;
        $data['biennhans'] = $data['khachhang']->rlsBiennhan;
        return view('biennhan-nhap', $data);
    }
    
    public function postNhapbiennhan(Request $request) {
        $biennhan = new biennhan;
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
        $nhatky = new nhatky;
        $nhatky->biennhan_id = $biennhan->id;
        $nhatky->nhanvien_id = UserInfo()->id;
        $nhatky->noidung = "Đang chờ xử lý.";
        $nhatky->congkhai = 1;
        $nhatky->save();
        
        return redirect('xembiennhan/'.$biennhan->id);
    }
    
    public function getSudungbiennhan($khachhang_id, $biennhan_id) {
        $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['outStt'] = biennhan::orderBy('id', 'desc')->first()->id+1;
        $data['biennhans'] = $data['khachhang']->rlsBiennhan;
        $data['biennhancu'] = biennhan::findOrFail($biennhan_id);
        return view('biennhan-nhap', $data);
    }
    
    public function getHoanThanh($biennhan_id) {
        $biennhan = biennhan::find($biennhan_id);
        if ($biennhan->tiendo == 2) {
            $biennhan->tiendo = 0;
        } else {
            $biennhan->tiendo += 1;
        }
        
        $biennhan->save();
        return redirect('xembiennhan/'.$biennhan->id);
    }
    
    public function getSuabiennhan($biennhan_id) {
        $data['biennhan'] = biennhan::find($biennhan_id);
        $data['khachhang'] = $data['biennhan']->rlsKhachhang;
        return view('biennhan-sua', $data);
    }
    
    public function postSuabiennhan(Request $request) {
        $biennhan = biennhan::find($request->inputStt);
        $biennhan->khachhang_id = $request->inputKhachhang;
        $biennhan->yeucau = $request->inputYeucau;
        $biennhan->dongmay = $request->inputDongmay;
        $biennhan->cpu = $request->inputCpu;
        $biennhan->ram = $request->inputRam;
        $biennhan->ocung = $request->inputOcung;
        $biennhan->tinhtrang = $request->inputTinhtrang;
        $biennhan->khac = $request->inputPhukien;
        $biennhan->save();
        
        return redirect('xembiennhan/'.$biennhan->id)->with('success', 'Đã cập nhật thành công!');
    }
}
