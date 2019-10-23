<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Model\payment;
use App\Model\staff;
use App\Model\field;
use App\Model\branch;
use Core\Services\PaymentServiceContract;
use Core\Services\ClientServiceContract;

class PaymentsController extends Controller
{
    protected $model;
    protected $service;
    public function __construct(payment $model, PaymentServiceContract $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    public function getAdd($client_id, ClientServiceContract $client_service) {
        $data['client'] = $client_service->find($client_id);
        $data['branches'] = branch::all();
        $data['staffs'] = staff::all();
        $data['fields'] = field::all();
        return view('payment-add', $data);
    }
    
    public function postAdd(Request $req) 
    {
        $data = $req->only($this->model->fillable);
        $payment_id = $this->service->store($data);
        return redirect()->route('staff.payment.view.get', ['payment_id' => $payment_id]);
    }
    
    public function getList() {
        $data['payments'] = $this->service->getList();
        return view('payment-list', $data);
    }

    public function getListbyField($field_id)
    {
        $data['payments'] = $this->service->getListbyField($field_id);
        return view('payment-list', $data);
    }
    
    public function getView($payment_id) {
        $data['payment'] = payment::findOrFail($payment_id);
        return view('payment-view', $data);
    }
    
    public function getPrint($payment_id) {
        $data['payment'] = payment::findOrFail($payment_id);
        return view('payment-print', $data);
    }
}
