<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\download;

class DownloadsController extends Controller
{
    public function getListforGuest() {
        $data['downloads'] = download::all();
        return view('download-publiclist', $data);
    }
    
    public function getList() {
        $data['downloads'] = download::all();
        return view('download-list', $data);
    }
    
    public function getAdd() {
        return view('download-add');
    }
    
    public function postAdd(Request $request) {
        $download = new download;
        $download->name = $request->name;
        $download->description = $request->description;
        $download->link = $request->link;
        $download->sha1 = $request->sha1;
        $download->save();
        return redirect()->route('staff.download.list.get')->with('success','Đã thêm thành công!');
    }
    
    public function getEdit($download_id) {
        $data['download'] = download::findOrFail($download_id);
        return view('download-edit', $data);
    }
    
    public function postEdit(Request $request) {
        $download = download::findOrFail($request->inputId);
        $download->name = $request->name;
        $download->description = $request->description;
        $download->link = $request->link;
        $download->sha1 = $request->sha1;
        $download->save();
        return redirect()->route('staff.download.list.get')->with('success','Lưu thay đổi thành công!');
    }
    
    public function getDelete($download_id) {
        $taive = download::findOrFail($download_id)->delete();
        return redirect()->route('staff.download.list.get')->with('success','Đã xóa thành công!');
    }
}
