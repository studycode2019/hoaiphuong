@extends('master')

@section('head')
<title>DEMO20 | Thêm học viên</title>
<link rel="stylesheet" href="{{ secure_asset('plugins/select2/select2.min.css') }}">
@stop
  
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÊM HỌC VIÊN VÀO LỚP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Nhập lớp học</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    @if (isset($errors)) 
    @foreach ($errors->all() as $error) 
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Thất bại!</h4> {!! $error !!}
      </div>
    @endforeach
    @endif
    <form action="/themhocvien" method="post">
    {{csrf_field()}}
    <input type="hidden" name="inputKhachhangId" value="{{$khachhang->id}}"/>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-group col-md-12">
                <label>Tên học viên</label>
                <input type="text" class="form-control" value="{{$khachhang->ten}}" disabled>
              </div>
              <div class="form-group col-md-12">
                <label>Chọn lớp học</label>
                <select name="inputLophocId" class="form-control select2" style="width: 100%;">
                  @foreach($lophocs as $data)
                  <option value="{{$data->id}}">{{$data->malophoc}} - {{$data->ten}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-12">
                <label>Phần trăm ưu đãi (%)</label>
                <input type="number" class="form-control" name="inputUudai" value="{{ old('inputUudai') }}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Số tiền đã thu</label>
                <input type="number" class="form-control" name="inputDadong" value="{{ old('inputDadong') }}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Chương trình ưu đãi</label>
                <input type="textarea" class="form-control" name="inputGhichu" value="{{ old('inputGhichu') }}" placeholder="Ghi rõ nội dung ưu đãi">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
@section('script')
<!-- bootstrap datepicker -->
<script language="JavaScript" type="text/javascript" src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('/plugins/select2/select2.full.min.js')}}"></script>
<script>
/* global $ */
  $(function () {
    $('.select2').select2()
  })
</script>
@stop