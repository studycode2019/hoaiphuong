<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\client;
use App\Model\cases;

class SearchController extends Controller
{
    public function getSearch() {
        $keyword = Input::get('keyword');
        $redirect = Input::get('redirect');
        if (strlen($keyword) < 10) {
            $data = cases::findOrFail($keyword);
            return redirect()->route('staff.cases.view.get', ['case_id'=>$data->id]);
        } 
        
        if (strlen($keyword) == 10) {
            $data = client::where('sdt', $keyword)->first();
            if ($data) {
                return redirect()->route('staff.client.view.get', ['client_id'=>$data->id]);
            } else {
                $data['outSdt'] = $keyword;
                return view('khachhang-nhap', $data);
            }
        }
    }
}
