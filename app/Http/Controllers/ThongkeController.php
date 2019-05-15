<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\biennhan;

class ThongkeController extends Controller
{
    public function getBiennhanTheonam($namthongke) {
        for($thangthongke=1;$thangthongke<=12;$thangthongke++) {
            $tongsobiennhan[] = count(biennhan::whereYear('created_at', '=', $namthongke)->whereMonth('created_at', '=', $thangthongke)->get());
        }
        $data['namthongke'] = $namthongke;
        $data['tongsobiennhan'] = json_encode($tongsobiennhan);
            for($thangthongke=1;$thangthongke<=3;$thangthongke++) {
                unset($biennhantheothang);  //xoa het mang
                for($ngaythongke=1;$ngaythongke<=31;$ngaythongke++) {
                    $biennhantheothang[] = count(biennhan::whereDate('created_at', '=',$namthongke.'-'.$thangthongke.'-'.$ngaythongke)->get());
                }
                $biennhantheoquy[] = json_encode($biennhantheothang);
            }
        $data['biennhantheoquy'] = $biennhantheoquy;
        return view('thongke-biennhan-nam', $data);
    }
}
