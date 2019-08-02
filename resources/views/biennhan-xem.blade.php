@extends('master')
@section('head')
<title>DEMO20 | Xem biên nhân #{{$biennhan->id}}</title>
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
          <h1>XEM BIÊN NHẬN</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Xem biên nhận</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      @if (session('success'))
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-check"></i> Thành công!</h5>
            {{ session('success') }}
          </div>
        </div>
      </div>
      @endif
      <div class="row">
        <div class="col-md-6">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fa fa-wrench"></i>  <b>BIÊN NHẬN SỬA CHỮA MÁY</b>
                  <small class="float-right"><b>SỐ PHIẾU #{{ $biennhan -> id }}</b></small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <!--<div class="col-md-6 invoice-col">-->
              <!--  <address>-->
              <!--    <strong>Trung tâm Đôrêmon Cần Thơ</strong><br>-->
              <!--    C132/10A hẻm 132, đường 3 Tháng 2<br>-->
              <!--    P. Hưng Lợi, Q. Ninh Kiều, TP. Cần Thơ<br>-->
              <!--    <b>Số điện thoại:</b> (+84) 888-141811 hoặc (+84) 96-1020-096<br>-->
              <!--    <b>Email:</b> hotro@trungtamdoremon.com<br>-->
              <!--    <b>Website:</b> trungtamdoremon.com / cuahangdoremon.com-->
              <!--  </address>-->
              <!--</div>-->
              <!-- /.col -->
              <div class="col-md-8 invoice-col">
                <u>Thông tin khách hàng:</u>
                <address>
                  <strong class="text-uppercase"><a href="/xemkhachhang/{{ $khachhang -> id }}">{{ $khachhang -> ten }}</a></strong><br>
                  <b>Số điện thoại:</b> <a href="tel:{{$khachhang -> sdt}}">{{ PhoneFormat($khachhang -> sdt) }}</a><br>
                  <b>Ngày sinh:</b> {{ date("d/m/Y", strtotime($khachhang -> ngaysinh)) }}<br>
                  <b>Mã khách hàng:</b> KH{{ $khachhang -> id }}<br>
                  <b>Ngày nhận máy:</b> {{ $biennhan->created_at->timezone('Asia/Ho_Chi_Minh')->format("d/m/Y - H:i") }}<br>
                  <b>Nhân viên nhận:</b> {{ $biennhan->rlsNhanvien->ten }}
                </address>
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="btn-group" style="width: 100%">
                  <div class="btn btn-{{$biennhan->rlsTrangthai->class}}" style="width: 100%">{{$biennhan->rlsTrangthai->ten}}</div>
                  <button type="button" class="btn btn-{{$biennhan->rlsTrangthai->class}} dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    @foreach ($trangthais as $data)
                    <a class="dropdown-item" href="/xembiennhan/{{$biennhan->id}}/trangthai/{{$data->id}}">{{$data->ten}}</a>
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
              <div class="col-12">
                <address>
                  <h5 class="text-uppercase"><b>Yêu cầu khách hàng:</b> {{ $biennhan -> yeucau }}</h5>
                </address>
              </div>
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-uppercase" style="width: 200px"><b>Dòng máy</b></h5></td>
                      <td class="text-uppercase">{{ $biennhan -> dongmay }}</h5></td>
                    </tr>
                    <tr>
                      <td class="text-uppercase" style="width: 200px"><b>CPU</b></h5></td>
                      <td class="text-uppercase">{{ $biennhan -> cpu }}</h5></td>
                    </tr>
                    <tr>
                      <td class="text-uppercase" style="width: 200px"><b>Dung lượng RAM</b></h5></td>
                      <td class="text-uppercase">{{ $biennhan -> ram }}</h5></td>
                    </tr>
                    <tr>
                      <td class="text-uppercase" style="width: 200px"><b>Dung lượng ổ cứng</b></h5></td>
                      <td class="text-uppercase">{{ $biennhan -> ocung }}</h5></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 table-responsive">
                <table class="table table-striped table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-uppercase" style="width: 200px"><b>Phụ kiện kèm theo</b></h5></td>
                      <td class="text-uppercase">{{ $biennhan -> khac }}</h5></td>
                    </tr>
                    <tr>
                      <td class="text-uppercase" style="width: 200px"><b>Tình trạng máy</b></h5></td>
                      <td class="text-uppercase">{{ $biennhan -> tinhtrang }}</h5></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
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
            <div class="row no-print">
              <div class="col-12">
                <a href="/suakhachhang/{{ $biennhan -> rlsKhachhang ->id }}" class="btn btn-default" autofocus>Sửa khách hàng</a>
                <a href="/suabiennhan/{{ $biennhan -> id }}" class="btn btn-default" autofocus>Sửa biên nhận</a>
                <a href="/inbiennhanpos/{{ $biennhan -> id }}" target="_blank" class="btn btn-primary float-right" id="btnIn"><i class="fa fa-print"></i>&nbsp;&nbsp;IN MÁY POS</a>
                <a href="/inbiennhan/{{ $biennhan -> id }}" target="_blank" class="btn btn float-right" id="btnIn"><i class="fa fa-print"></i>&nbsp;&nbsp;IN BIÊN NHẬN</a>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div>
        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Thêm nhật ký</h3>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                <form action="/nhapnhatky" method="post">
                  {{csrf_field()}}
                  <div class="input-group">
                    <input name="inputNoidung" type="text" class="form-control" placeholder="Nhập nội dung..." required>
                    <input name="inputBiennhan" type="hidden" value="{{$biennhan->id}}"/>
                  </div>
                  <div class="row my-2">
                    <div class="col-md-8">
                      <div class="checkbox icheck">
                        <label>
                        <input name="inputCongkhai" type="checkbox"> Công khai cho khách hàng
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-info btn-flat float-right">Thêm!</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Nhật ký sửa chữa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Thời gian</th>
                    <th>Nội dung</th>
                    <th>Nhân viên</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($nhatkys as $data)
                  <tr>
                    <td>{{ $data->created_at->timezone('Asia/Ho_Chi_Minh')->format("d/m/Y - H:i") }}</td>
                    <td>
                      @if($data->congkhai) 
                      <a style="color: #0a0" href="/nhatky/{{$data->id}}/congkhai" ="Đang công khai, ấn để thay đổi">
                      <i class="fa fa-globe"></i>
                      </a>&nbsp; 
                      @else 
                      <a style="color: #a00" href="/nhatky/{{$data->id}}/congkhai">
                      <i class="fa fa-times"></i>
                      </a>&nbsp; 
                      @endif {{ $data->noidung }}
                    </td>
                    <td>{{ $data->rlsNhanvien->ten }}</td>
                  </tr>
                  @endforeach
                  </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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
    if (evt.keyCode == 119) //F8
        document.getElementById("btnIn").click();
  };
</script>
@stop