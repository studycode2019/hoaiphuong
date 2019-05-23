<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\phieuthu;
use App\Model\phieuchi;
use App\Model\phieuthu_danhmuc as danhmuc;

class TaichinhController extends Controller
{
    public function getTongquan() {
    	$data['phieuthus'] = phieuthu::all();
    	$data['phieuchis'] = phieuchi::all();
    	$data['tongthu'] = $data['phieuthus']->sum('sotien');
    	$data['tongchi'] = $data['phieuchis']->sum('sotien');
    	return view('taichinh-tongquan', $data);
    }


    public function getDanhmuc($danhmuc_id) {
    	$danhmuc = danhmuc::findOrFail($danhmuc_id);
    	$data['phieuthus'] = $danhmuc->rlsPhieuthu;
    	$data['phieuchis'] = $danhmuc->rlsPhieuchi;
    	$data['tongthu'] = $data['phieuthus']->sum('sotien');
    	$data['tongchi'] = $data['phieuchis']->sum('sotien');
    	return view('taichinh-tongquan', $data);
    }
}
