<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Excel;
use DB;
use App\Http\Requests;
use App\Http\Requests\AddClientRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\client;
use App\Model\ticket;
use App\Model\class_list;
use Core\Services\ClientServiceContract;

class ClientsController extends Controller
{
    protected $model;
    protected $service;

    public function __construct(client $model, ClientServiceContract $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    public function getList() {
        $data['clients'] = $this->service->getList();
        return view('client-list', $data);
    }
    
    public function getView($client_id) {
        $data['client'] = $this->service->getView($client_id);
        return view('client-view', $data);
    }

    public function getAdd($phone = NULL)
    {
        $data['phone'] = $phone;
        return view('client-add', $data);
    }
    
    public function postAdd(AddClientRequest $req) 
    {
        $data = $req->only($this->model->fillable);
        $id = $this->service->store($data);
        return redirect()->route('staff.client.view.get', ['client_id'=>$id]);
    }
    
    public function getEdit($client_id) {
        $data['client'] = $this->service->find($client_id);
        return view('client-edit', $data);
    }
    
    public function postEdit(AddClientRequest $req) 
    {
        $data = $req->only($this->model->fillable);
        $this->service->update($req->id, $data);
        return redirect()->route('staff.client.view.get', ['client_id'=>$req->id])->with('success', 'Đã cập nhật thành công!');
    }

    public function getExportExcel()
    {
        $clients_array = $this->model->all();
        $this->downloadExcel('client_export', 'xls', $clients_array);
    }

    public function getExportExcelEdu()
    {
        $clients = $this->model->all();
        foreach ($clients as $client) {
            if(count($client->tickets) == 0) {
                $clients_array[] = $client->toArray();
            }
        }
        $this->downloadExcel('client_export_edu', 'xls', $clients_array);
    }

    public function getExportExcelTech()
    {
        $clients = $this->model->all();
        foreach ($clients as $client) {
            if(count($client->tickets) != 0) {
                $clients_array[] = $client->toArray();
            }
        }
        $this->downloadExcel('client_export_tech', 'xls', $clients_array);
        
    }

    public function downloadExcel($name, $type, $arr)
    {
        Excel::create($name, function($excel) use($arr) {
            $excel->sheet('data', function($sheet) use($arr) {
                $sheet->fromArray($arr);
            });
        
        })->download($type);
    }
}
