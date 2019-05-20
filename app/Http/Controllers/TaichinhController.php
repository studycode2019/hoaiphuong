<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\phieuthu;
use App\Model\phieuchi;

class TaichinhController extends Controller
{
    public function getTongquan() {
    	$data['phieuthus'] = phieuthu::all();
    	$data['phieuchis'] = phieuchi::all();
    	$data['tongthu'] = $data['phieuthus']->sum('sotien');
    	$data['tongchi'] = $data['phieuchis']->sum('sotien');
    	return view('taichinh-tongquan', $data);
    }
}
