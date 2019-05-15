@extends('master')
@section('head')
<title>DEMO20 | Sửa khách hàng: {{$khachhang->ten}}</title>
@stop
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>KHÁCH HÀNG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa thông tin khách hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nhập thông tin khách hàng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/suakhachhang" method="post">
                {{csrf_field()}}
                <input type="hidden" name="inputKhachhang" value="{{$khachhang->id}}"/>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSdt">Số điện thoại:</label>
                    <input name="inputSdt" pattern="[0-9]{10}" class="form-control" id="inputSdt" value="{{$khachhang->sdt}}" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="inputTen">Tên khách hàng:</label>
                    <input name="inputTen" type="text" class="form-control" id="inputTen" value="{{$khachhang->ten}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputNgaysinh">Ngày sinh:</label>
                    <input name="inputNgaysinh" type="date" class="form-control" id="inputNgaysinh" value="{{$khachhang->ngaysinh}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                  <a onclick="history.go(-1);" class="btn">Quay lại</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop

@section('script')
@stop