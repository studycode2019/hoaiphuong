<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\khachhang;
use App\Model\biennhan;

class TimkiemController extends Controller
{
    public function getTimkiem() {
        $keyword = Input::get('keyword');
        $redirect = Input::get('redirect');
        if (strlen($keyword) < 10) {
            $data = biennhan::findOrFail($keyword);
            return redirect('xembiennhan/'.$data->id);
        } 
        
        if (strlen($keyword) == 10) {
            $data = khachhang::where('sdt', $keyword)->first();
            if ($data) {
                return redirect('xemkhachhang/'.$data->id);
            } else {
                $data['outSdt'] = $keyword;
                return view('khachhang-nhap', $data);
            }
        }
    }
}
