@extends('master')
@section('head')
<title>SYS BDS</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
<style>
  .pagination li {
    padding: 10px; 
  }
  .pagination {
    float: right;
  }
</style>
@stop
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="text-uppercase text-warning"><b>Yêu cầu khách hàng</b></h1> --}}
          </div>
          <div class="col-sm-6 text-right p3">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Đăng ký bán BDS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header text-center text-uppercase">
              <h3 class="card-title"><b>Danh sách khách hàng đăng ký bán BDS</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr class="text-center">
                  <th>Ngày nhận</th>
                  <th>Mã BDS</th>
                  <th>Tên khách hàng</th>
                  <th>Địa chỉ</th>
                  <th>Mô tả chi tiết</th>
                  <th>Tổng số tiền</th>
                  <th>Trình trạng</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                <tr>
                  <td class="text-center">{{date("d/m/Y", strtotime($ticket->created_at))}}</td>
                  <td class="text-center">{{$ticket->id}}</td>
                  <td class="text-uppercase">{{$ticket->client->name}}</td>
                  <td>{{$ticket->address}}</td>
                  <td><a href="{{route('staff.ticket.view.get', ['case_id' => $ticket->id])}}">{{$ticket->description}}</a></td>
                  <td class="text-center">@if(isset($ticket->price)) @if($ticket->price==0) Miễn phí @else {{MoneyFormat($ticket->price)}} VNĐ @endif @endif</td>
                  <td class="text-center">
                      <span class="badge bg-warning {{$ticket->ticketStatus->class}}"><span style="display: none;">{{$ticket->ticketStatus->id}}</span>{{$ticket->ticketStatus->name}}</span>
                    </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="{{route('staff.ticket.view.get', ['case_id' => $ticket->id])}}" class="btn btn-primary">Xem</a>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="{{route('staff.ticket.edit.get', ['case_id' => $ticket->id])}}" target="_blank">Sửa thông tin</a>
                        <a class="dropdown-item" href="{{route('staff.ticket.printinternal.get', ['case_id' => $ticket->id])}}" target="_blank">In phiếu dán</a>
                        <a class="dropdown-item" href="{{route('staff.ticket.print.get', ['case_id' => $ticket->id])}}" target="_blank">In biên nhận</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            
            <div class="dataTables_paginate paging_simple_numbers">
              {{ $tickets->links() }}
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop

@section('script')
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
        // "order": false,
        "order": [[ 5, "asc" ]],
        "lengthMenu": [ 50 ],
        "bPaginate": false,
        "language": {
        	"sProcessing":   "Đang xử lý...",
        	"sLengthMenu":   "Xem _MENU_ mục",
        	"sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
        	"sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
        	"sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
        	"sInfoFiltered": "(được lọc từ _MAX_ mục)",
        	"sInfoPostFix":  "",
        	"sSearch":       "Tìm:",
        	"sUrl":          "",
        	"oPaginate": {
        		"sFirst":    "Đầu",
        		"sPrevious": "Trước",
        		"sNext":     "Tiếp",
        		"sLast":     "Cuối"
        	}
        }
    });
  });

</script>
@stop