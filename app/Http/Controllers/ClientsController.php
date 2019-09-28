<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Excel;
use DB;
use Core\Services\ClientServiceContract;
use App\Http\Requests;
use App\Http\Requests\AddClientRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon; //bo dem thoi gian
use App\Model\client;
use App\Model\ticket;
use App\Model\class_list;

class ClientsController extends Controller
{
    protected $service;
    protected $model;

    public function __construct(ClientServiceContract $service, client $model)
    {
        $this->service = $service;
        $this->model = $model;
    }

    public function getList() {
        if(UserInfo()->level<3) {
            return Redirect::back();
        }
        $data['khachhangs'] = client::all();
        return view('khachhang-danhsach', $data);
    }
    
    public function getView($client_id) {

        $data['client'] = $this->service->find($client_id);
        return view('khachhang-xem', $data);
    }

    public function getSearch() {
        return view('timkhachhang');
    }
    
    public function postSearch(Request $request) {
        $khachhang = client::where('sdt', $request->inputSdt)->first();

        if (!$khachhang) { //Nếu đã có trong csdl -> xem
            return redirect()->route('staff.client.view.get', ['client_id'=>$khachhang->id]);
        } 
        else {   //Nếu chưa có sdt này trong csdl -> nhap
            return redirect()->route('staff.client.add.get', ['phone' => $request->inputSdt]);
        }
    }

    public function getAdd($phone = NULL)
    {
        $data['phone'] = $phone;
        return view('khachhang-nhap', $data);
    }
    
    public function postAdd(AddClientRequest $req) 
    {
        $model = new client;
        $data = $req->only($this->model->fillable);

        $id = DB::table($model->table)->insertGetId($data);

        return redirect()->route('staff.client.view.get', ['client_id'=>$id]);
    }
    
    public function getEdit($client_id) {
        $data['client'] = client::findOrFail($client_id);
        return view('khachhang-sua', $data);
    }
    
    public function postEdit(AddClientRequest $req) 
    {
        $data = $req->only($this->model->fillable);
        
        DB::table($this->model->table)->where('id', $req->id)->update($data);

        return redirect()->route('staff.client.view.get', ['client_id'=>$req->id])->with('success', 'Đã cập nhật thành công!');
    }

    public function getExportExcel()
    {
        $clients_array = client::all();
        $this->downloadExcel('client_export', 'xls', $clients_array);
    }

    public function getExportExcelEdu()
    {
        $clients = client::all();
        foreach ($clients as $client) {
            if(count($client->rlsCases) == 0) {
                $clients_array[] = $client->toArray();
            }
        }
        $this->downloadExcel('client_export_edu', 'xls', $clients_array);
    }

    public function getExportExcelTech()
    {
        $clients = client::all();
        foreach ($clients as $client) {
            if(count($client->rlsCases) != 0) {
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
