<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\client;
use App\Model\ticket;
use App\Model\ticket_log;
use App\Model\ticket_status;


use Core\Services\TicketServiceContract;
use Core\Services\TicketStatusServiceContract;
use Core\Services\ClientServiceContract;

class TicketsController extends Controller
{
    protected $model;
    protected $service;
    protected $ticket_status_service;
    protected $client_service;

    public function __construct(ticket $model, TicketServiceContract $service, TicketStatusServiceContract $ticket_status_service, ClientServiceContract $client_service)
    {
        $this->model = $model;
        $this->service = $service;
        $this->ticket_status_service = $ticket_status_service;
        $this->client_service = $client_service;
    }

    public function getList() { 
        $data['tickets'] = $this->service->getList();
        return view('ticket-list', $data);
    }
    
    public function getChangeStatus($ticket_id, $ticketstatus_id) {
        $this->service->setStatusId($ticket_id, $ticketstatus_id);
        return redirect()->route('staff.ticket.view.get', ['ticket_id' => $ticket_id]);
    }
    
    public function getView($ticket_id) {
        $data = $this->service->getView($ticket_id);
        return view('ticket-view', $data);
    }

    public function getPrint($ticket_id) {
        $data['ticket'] = $this->service->find($ticket_id);
        return view('ticket-print', $data);
    }

    public function getPrintPos($ticket_id) {
        $data['ticket'] = $this->service->find($ticket_id);
        return view('ticket-printpos', $data);
    }
    
    public function getPrintInternal($ticket_id) {
        $data['ticket'] = $this->service->find($ticket_id);
        return view('ticket-printinternal', $data);
    }
    
    public function getAdd($khachhang_id) {
        $data['client'] = client::findOrFail($khachhang_id);
        return view('ticket-add', $data);
    }
    
    public function postAdd(Request $req) {
        $data = $req->only($this->model->fillable);
        $ticket = $this->service->store($data);        
        return redirect()->route('staff.ticket.view.get', ['case_id' => $ticket->id]);
    }
    
    public function getUseOld($ticket_id) {
        $data['ticket_old'] = $this->service->find($ticket_id);
        $data['client'] = $data['ticket_old']->client;
        return view('ticket-add', $data);
    }
    
    public function getEdit($ticket_id) {
        $data['ticket'] = $this->service->find($ticket_id);
        return view('ticket-edit', $data);
    }
    
    public function postEdit(Request $req) {
        $data = $req->only($this->model->fillable);
        $this->service->update($req->id, $data);
        return redirect()->route('staff.ticket.view.get', ['case_id' => $req->id])->with('success', 'Đã cập nhật thành công!');
    }
}
