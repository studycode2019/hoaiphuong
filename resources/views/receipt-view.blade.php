@extends('master')
@section('head')
<title>SYS BDS | #{{$receipt->id}}</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{secure_asset('plugins/iCheck/square/blue.css')}}">
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1>XEM PHIẾU THU</h1> --}}
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Xem phiếu thu</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row offset-2">
        <div class="col-8">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row-12">
              <div class="col">
                <h4>
                  <i class="fa fa-globe"></i>  <b>PHIẾU THU</b>
                  <small class="float-right"><b>SỐ PHIẾU #{{ $receipt -> number }}</b></small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-md-6 invoice-col">
                <u>Thông tin phiếu thu:</u>
                <address>
                  <strong class="text-uppercase"><a href="{{route('staff.client.view.get', ['client_id'=>$receipt->client->id])}}">{{$receipt->client->name}}</a></strong><br>
                  <b>Số điện thoại: </b><a href="tel:{{$receipt->client->sdt}}">{{PhoneFormat($receipt->client->phone)}}</a><br>
                  <b>Ngày sinh:</b> {{ date("d/m/Y", strtotime($receipt->client->birthday)) }}<br>
                  <b>Mã KH:</b> {{ $receipt->client->id }}<br>
                  <b>Ngày lập phiếu:</b> {{ $receipt->created_at->timezone('Asia/Ho_Chi_Minh')->format("d/m/Y - H:i") }}<br>
                  <b>Nhân viên lập:</b> {{ $receipt->staff->name }}
                </address>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-12">
                <address>
                  <h5 class="text-uppercase">
                    <b>DANH SÁCH</b>
                  </h5>
                </address>
              </div>
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped table table-bordered">
                  <thead>
                    <tr class="text-center">
                      <th>STT</th>
                      <th>Nội dung</th>
                      <th>Tổng số tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-uppercase text-center">1</td>
                      <td class="text-uppercase">{{ $receipt -> content }}</td>
                      <td class="text-uppercase text-center">{{ number_format($receipt->amount,0,",",".") }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- /.row -->
          <!--<div class="row">-->
          <!-- accepted payments column -->
          <!--  <div class="col-6">-->
          <!--    <p class="lead">NHÂN VIÊN</p>-->
          <!--  </div>-->
          <!-- /.col -->
          <!--  <div class="col-6">-->
          <!--    <p class="lead">KHÁCH HÀNG</p>-->
          <!--  </div>-->
          <!-- /.col -->
          <!--</div>-->
          <!-- /.row -->
          <!-- this row will not appear when printing -->
          <div class="card card-footer">
            <div class="col-12">
              <a href="{{route('staff.client.edit.get', ['client_id' => $receipt->client->id])}}" class="btn btn-default" >Sửa khách hàng</a>
              <a href="{{route('staff.receipt.print.get', ['client_id' => $receipt->id])}}" target="_blank" class="btn btn-primary float-right" id="btnIn"><i class="fa fa-print"></i>&nbsp;&nbsp;IN PHIẾU THU</a>
            </div>
          </div>
        </div>
        <!-- /.invoice -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
@section('script')
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- iCheck -->
<script src="{{secure_asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": true,
    });
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  });
window.onkeydown = function(evt) {
    if (evt.keyCode == 80) //P
        document.getElementById("btnIn").click();
};
</script>
@stop