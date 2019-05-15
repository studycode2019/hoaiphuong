<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\taive;

class TaiveController extends Controller
{
    public function getDanhsachCongkhai() {
        $data['taives'] = taive::all();
        return view('taive-congkhai', $data);
    }
    
    public function getDanhsach() {
        $data['taives'] = taive::all();
        return view('taive-danhsach', $data);
    }
    
    public function getThemtaive() {
        return view('taive-them');
    }
    
    public function postThemtaive(Request $request) {
        $taive = new taive;
        $taive->ten = $request->inputTen;
        $taive->mota = $request->inputMota;
        $taive->link = $request->inputLink;
        $taive->sha1 = $request->InputSha1;
        $taive->save();
        
        return redirect('/taive')->with('success','Đã thêm thành công!');
    }
    
    public function getSua($taive_id) {
        $data['taive'] = taive::findOrFail($taive_id);
        return view('taive-sua', $data);
    }
    
    public function postSua(Request $request) {
        $taive = taive::findOrFail($request->inputId);
        $taive->ten = $request->inputTen;
        $taive->mota = $request->inputMota;
        $taive->link = $request->inputLink;
        $taive->sha1 = $request->InputSha1;
        $taive->save();
        
        return redirect('/taive')->with('success','Lưu thay đổi thành công!');
    }
    
    public function getXoa($taive_id) {
        $taive = taive::findOrFail($taive_id)->delete();
        
        return redirect()->back()->with('success','Đã xóa thành công!');
    }
}
