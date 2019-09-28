<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\client;
use App\Model\ticket;
use App\Model\ticket_log;
use App\Model\ticket_status;

class TicketsController extends Controller
{
    public function getList() { 
        if(UserInfo()->level>=3) {
            $data['tickets'] =  ticket::with('client')->get();
        } else {
            $data['tickets'] =  ticket::where('tiendo', '!=', 5)->with('client')->get();
        }
        return view('biennhan-danhsach', $data);
    }
    
    public function getChangeStatus($ticket_id, $ticketstatus_id) {
        $ticketStatus = ticket_status::findOrFail($ticketstatus_id);
        $ticket = ticket::findOrFail($ticket_id);
        $ticket->tiendo = $ticketStatus->id;
        $ticket->save();
        $ticketLog = new ticket_log;
        $ticketLog->biennhan_id = $ticket->id;
        $ticketLog->nhanvien_id = UserInfo()->id;
        $ticketLog->noidung = "Đã chuyển trang thái thành ".$ticketStatus->ten;
        $ticketLog->congkhai = 0;
        $ticketLog->save();
        
        return redirect()->route('staff.ticket.view.get', ['ticket_id' => $ticket->id]);
    }
    
    public function getView($ticket_id) {
        $data['ticket'] = ticket::find($ticket_id);
        $data['ticket_statuses'] = ticket_status::all();
        return view('biennhan-xem', $data);
    }

    public function getPrint($ticket_id) {
        $data['ticket'] = ticket::find($ticket_id);
        return view('biennhan-in', $data);
    }

    public function getPrintPos($ticket_id) {
        $data['ticket'] = ticket::find($ticket_id);
        return view('biennhan-inpos', $data);
    }
    
    public function getPrintInternal($ticket_id) {
        $data['ticket'] = ticket::find($ticket_id);
        return view('biennhan-inluu', $data);
    }
    
    public function getAdd($khachhang_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['biennhans'] = $data['khachhang']->rlsticket;
        return view('biennhan-nhap', $data);
    }
    
    public function postAdd(Request $request) {
        $biennhan = new ticket;
        $biennhan->khachhang_id = $request->inputKhachhang;
        $biennhan->nhanvien_id = UserInfo()->id;
        $biennhan->yeucau = $request->inputYeucau;
        $biennhan->dongmay = $request->inputDongmay;
        $biennhan->cpu = $request->inputCpu;
        $biennhan->ram = $request->inputRam;
        $biennhan->ocung = $request->inputOcung;
        $biennhan->tinhtrang = $request->inputTinhtrang;
        $biennhan->khac = $request->inputPhukien;
        $biennhan->save();
        $nhatky = new ticket_log;
        $nhatky->biennhan_id = $biennhan->id;
        $nhatky->nhanvien_id = UserInfo()->id;
        $nhatky->noidung = "Đang chờ xử lý.";
        $nhatky->congkhai = 1;
        $nhatky->save();
        
        return redirect()->route('staff.ticket.view.get', ['case_id' => $biennhan->id]);
    }
    
    public function getUseOld($khachhang_id, $biennhan_id) {
        $data['khachhang'] = client::findOrFail($khachhang_id);
        $data['outStt'] = ticket::orderBy('id', 'desc')->first()->id+1;
        $data['biennhans'] = $data['khachhang']->rlsticket;
        $data['biennhancu'] = ticket::findOrFail($biennhan_id);
        return view('biennhan-nhap', $data);
    }
    
    public function getEdit($biennhan_id) {
        $data['ticket'] = ticket::find($biennhan_id);
        return view('biennhan-sua', $data);
    }
    
    public function postEdit(Request $request) {
        $biennhan = ticket::find($request->inputStt);
        $biennhan->khachhang_id = $request->inputKhachhang;
        $biennhan->yeucau = $request->inputYeucau;
        $biennhan->dongmay = $request->inputDongmay;
        $biennhan->cpu = $request->inputCpu;
        $biennhan->ram = $request->inputRam;
        $biennhan->ocung = $request->inputOcung;
        $biennhan->tinhtrang = $request->inputTinhtrang;
        $biennhan->khac = $request->inputPhukien;
        $biennhan->save();
        
        return redirect()->route('staff.ticket.view.get', ['case_id' => $biennhan->id])->with('success', 'Đã cập nhật thành công!');
    }
}
