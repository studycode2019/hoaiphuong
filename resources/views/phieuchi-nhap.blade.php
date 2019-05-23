@extends('master')
@section('head')
<title>DEMO20 | Nhập phiếu chi mới</title>
<link rel="stylesheet" href="{{secure_asset('plugins/select2/select2.min.css')}}">
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>NHẬP PHIẾU CHI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Nhập phiếu chi</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    @if (count($errors) > 0) 
    @foreach ($errors->all() as $error) 
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-ban"></i> Thất bại!</h5>
        {!! $error !!}
      </div>
    </div>
    @endforeach
    @endif
    <!-- general form elements -->
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Nhập thông tin phiếu chi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/nhapphieuchi" method="post">
          {{csrf_field()}}
          <div class="card-body">
            <div class="form-group">
              <label for="inputSostt">Tên người nhận:</label> {{$khachhang -> ten}}   |   
              <label for="inputSostt">Số Điện Thoại:</label> {{$khachhang -> sdt}}    |    
              <label for="inputSostt">Ngày Sinh:</label> {{$khachhang -> ngaysinh}}
              <input name="inputKhachhang" type="hidden" class="form-control" value="{{$khachhang -> id}}">
            </div>
            <div class="form-group">
              <label for="inputNoidung">Nội dung chi:</label>
              <input name="inputNoidung" type="text" class="form-control" id="inputNoidung" placeholder="Ví dụ: Chi mua trà sữa" autofocus required>
            </div>
            <div class="form-group">
              <label for="inputSotien">Số tiền:</label>
              <input name="inputSotien" type="number" class="form-control" id="inputSotien" placeholder="Nhập vào số tiền" required>
            </div>
            <div class="form-group">
              <label for="inputNhanvien">Người lập phiếu:</label>
              <select name="inputNhanvien" id="inputNhanvien" class="form-control select2" style="width: 100%;">
                @foreach ($nhanviens as $data)
                <option value="{{$data->id}}">{{$data->ten}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="inputNhanvien">Danh muc thu:</label>
              <select name="inputPhieuthuDanhmuc" id="inputPhieuthuDanhmuc" class="form-control select2" style="width: 100%;">
                @foreach ($phieuthudanhmucs as $data)
                <option value="{{$data->id}}">{{$data->ten}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="inputGhichu">Ghi chú:</label>
              <input name="inputGhichu" type="text" class="form-control" id="inputGhichu" placeholder="Nội dung ghi chú">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm vào</button>
            <a onclick="history.go(-1);" class="btn">Quay lại</a>
          </div>
        </form>
      </div>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
@section('script')
<!-- Select2 -->
<script src="{{secure_asset('plugins/select2/select2.full.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
@stop