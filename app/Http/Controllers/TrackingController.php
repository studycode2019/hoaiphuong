<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use App\Model\biennhan;
use App\Model\nhatky;
use App\Model\khachhang;

class TrackingController extends Controller
{
    public function getTimkiem() {
        return view('tracking-timkiem');
    }
    
    public function postTracking(Request $request) {
        $keyword = $request->inputKeyword;
        if (strlen($keyword) < 10) {
            return redirect('/tracking/'.$keyword);
        } else {
            try { $khachhang = khachhang::where('sdt', $keyword)->firstOrFail(); }
            catch(ModelNotFoundException $e) {
                return redirect()->back()->withErrors('Không tìm thấy số điện thoại này! Xin kiểm tra lại.');
            }
            return redirect('/customer/'.$khachhang->id);
        }
    }
    
    public function getByBiennhan($biennhan_id) {
        try { $biennhan = biennhan::findOrFail($biennhan_id); }
        catch(ModelNotFoundException $e) {
            return redirect()->back()->withErrors('Không tìm thấy số phiếu biên nhận này! Xin kiểm tra lại.');
        }
        $data['nhatkys'] = nhatky::where('biennhan_id', $biennhan_id)->where('congkhai','1')->orderBy('id', 'desc')->get();
        return view('tracking-xem', $data);
    }
    
    public function getByKhachhang($khachhang_id) {
        // $data['khachhang'] = khachhang::findOrFail($khachhang_id);
        $data['biennhans'] = khachhang::findOrFail($khachhang_id)->rlsBiennhan;
        // echo  $data['biennhans'];
        return view('tracking-khachhang', $data);
    }
}
