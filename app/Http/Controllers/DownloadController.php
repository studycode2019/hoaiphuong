<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\download;

class DownloadController extends Controller
{
    public function getListforGuest() {
        $data['taives'] = download::all();
        return view('taive-congkhai', $data);
    }
    
    public function getList() {
        $data['taives'] = download::all();
        return view('taive-danhsach', $data);
    }
    
    public function getAdd() {
        return view('taive-them');
    }
    
    public function postAdd(Request $request) {
        $taive = new download;
        $taive->ten = $request->inputTen;
        $taive->mota = $request->inputMota;
        $taive->link = $request->inputLink;
        $taive->sha1 = $request->InputSha1;
        $taive->save();
        
        return redirect()->route('staff.download.list.get')->with('success','Đã thêm thành công!');
    }
    
    public function getEdit($taive_id) {
        $data['taive'] = download::findOrFail($taive_id);
        return view('taive-sua', $data);
    }
    
    public function postEdit(Request $request) {
        $taive = download::findOrFail($request->inputId);
        $taive->ten = $request->inputTen;
        $taive->mota = $request->inputMota;
        $taive->link = $request->inputLink;
        $taive->sha1 = $request->InputSha1;
        $taive->save();
        
        return redirect()->route('staff.download.list.get')->with('success','Lưu thay đổi thành công!');
    }
    
    public function getDelete($taive_id) {
        $taive = download::findOrFail($taive_id)->delete();
        
        return redirect()->route('staff.download.list.get')->with('success','Đã xóa thành công!');
    }
}
