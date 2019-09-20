<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\case_log;

class CaselogController extends Controller
{
    public function getList() {
        $data['nhatkys'] = case_log::all();
        return view('nhatky-danhsach', $data);
    }
    
    public function postAdd(Request $request) {
        $data = new case_log;
        $data->noidung = $request->inputNoidung;
        $data->nhanvien_id = UserInfo()->id;
        $data->biennhan_id = $request->inputBiennhan;
        $data->congkhai = ($request->inputCongkhai)? true : false;
        $data->save();
        
        return redirect()->route('staff.cases.view.get', ['case_id' => $request->inputBiennhan]);
    }
    
    public function getSetpublic($nhatky_id) {
        $nhatky = case_log::find($nhatky_id);
        $nhatky->congkhai = !($nhatky->congkhai);
        $nhatky->save();
        return redirect()->route('staff.cases.view.get', ['case_id' => $nhatky->rlsCases->id]);
    }
}
