<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Core\Services\ReceiptServiceContract;
use Core\Services\ClientServiceContract;
use App\Http\Requests;
use App\Model\client;
use App\Model\receipt;
use App\Model\field;
use App\Model\staff;
use App\Model\branch;

class ReceiptsController extends Controller
{
    protected $model;
    protected $service;
    public function __construct(receipt $model, ReceiptServiceContract $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    public function getAdd($client_id, ClientServiceContract $client_service) {
        $data['client'] = $client_service->find($client_id);
        $data['branches'] = branch::all();
        $data['staffs'] = staff::all();
        $data['fields'] = field::all();
        return view('receipt-add', $data);
    }
    
    public function postAdd(Request $req) 
    {
        $data = $req->only($this->model->fillable);
        $receipt_id = $this->service->store($data);
        return redirect()->route('staff.receipt.view.get', ['receipt_id' => $receipt_id]);
    }
    
    public function getList() {
        $data['receipts'] = $this->service->getList();
        return view('receipt-list', $data);
    }

    public function getListbyField($field_id)
    {
        $data['receipts'] = $this->service->getListbyField($field_id);
        return view('receipt-list', $data);
    }
    
    public function getView($receipt_id) {
        $data['receipt'] = receipt::findOrFail($receipt_id);
        return view('receipt-view', $data);
    }
    
    public function getPrint($receipt_id) {
        $data['receipt'] = receipt::findOrFail($receipt_id);
        return view('receipt-print', $data);
    }
}
