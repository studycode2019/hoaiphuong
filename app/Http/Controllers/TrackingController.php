<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use App\Model\ticket;
use App\Model\ticket_log as log;
use App\Model\client;

class TrackingController extends Controller
{
    public function getSearch() {
        return view('tracking-search');
    }
    
    public function postTracking(Request $request) {
        $keyword = $request->inputKeyword;
        if (strlen($keyword) < 10) {
            return redirect()->route('guest.ticket.view.get', ['ticket_id' => $keyword]);
        } else {
            try { $khachhang = khachhang::where('sdt', $keyword)->firstOrFail(); }
            catch(ModelNotFoundException $e) {
                return redirect()->back()->withErrors('Không tìm thấy số điện thoại này! Xin kiểm tra lại.');
            }
            return redirect()->route('guest.client.view.get', ['client_id' => $khachhang->id]);
        }
    }
    
    public function getByTicket($ticket_id) {
        try { $ticket = ticket::findOrFail($ticket_id); }
        catch(ModelNotFoundException $e) {
            return redirect()->back()->withErrors('Không tìm thấy số phiếu biên nhận này! Xin kiểm tra lại.');
        }
        $data['logs'] = log::where('ticket_id', $ticket_id)->where('congkhai','1')->orderBy('id', 'desc')->get();
        return view('tracking-ticket', $data);
    }
    
    public function getByClient($client_id) {
        $data['tickets'] = client::findOrFail($client_id)->tickets;
        return view('tracking-client', $data);
    }
}
