<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\nhatky;

class NhatkyController extends Controller
{
    public function getDanhsach() {
        $data['nhatkys'] = nhatky::all();
        return view('nhatky-danhsach', $data);
        // echo $data['nhatkys'][0]->created_at;
    }
    
    public function postNhapnhatky(Request $request) {
        $data = new nhatky;
        $data->noidung = $request->inputNoidung;
        $data->nhanvien_id = UserInfo()->id;
        $data->biennhan_id = $request->inputBiennhan;
        $data->congkhai = ($request->inputCongkhai)? true : false;
        $data->save();
        
        return redirect('/xembiennhan/'.$request->inputBiennhan);
    }
    
    public function getCongkhai($nhatky_id) {
        $nhatky = nhatky::find($nhatky_id);
        $nhatky->congkhai = !($nhatky->congkhai);
        $nhatky->save();
        return redirect('xembiennhan/'.$nhatky->rlsBiennhan->id);
    }
}
