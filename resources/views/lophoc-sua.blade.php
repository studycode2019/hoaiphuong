@extends('master')

@section('head')
<title>DEMO20 | Sửa thông tin lớp học</title>
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@stop
  
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SỬA THÔNG TIN LỚP HỌC</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa lớp học</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    @if (count($errors) > 0) 
    @foreach ($errors->all() as $error) 
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Thất bại!</h4> {!! $error !!}
      </div>
    @endforeach
    @endif
    <form action="/sualophoc" method="post">
    {{csrf_field()}}
    <input type="hidden" name="inputLophocId" value="{{$lophoc->id}}">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Sửa thông lớp học</h3>
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-group col-md-12">
                <label>Tên lớp học</label>
                <input type="text" class="form-control" name="inputTen" value="{{$lophoc->ten}}"  required autofocus>
              </div>
              <div class="form-group col-md-12">
                <label>Mã lớp học</label>
                <input type="text" class="form-control" name="inputMalophoc" value="{{$lophoc->malophoc}}" required autofocus>
              </div>
              <div class="form-group col-md-12">
                <label>Số buổi</label>
                <input type="number" class="form-control" name="inputSobuoi" value="{{$lophoc->sobuoi}}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Ngày khai giảng</label>
                <input type="date" min="2018-01-01" class="form-control" name="inputKhaigiang" value="{{date('Y-m-d', strtotime($lophoc->khaigiang))}}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Lịch học (Thứ - Tiết)</label>
                <input type="text" class="form-control" name="inputLichhoc" value="{{$lophoc->lichhoc}}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Giáo viên</label>
                <input type="text" class="form-control" name="inputGiangvien" value="{{$lophoc->giangvien}}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Sỉ số</label>
                <input type="number" class="form-control" name="inputSiso" value="{{$lophoc->siso}}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Học phí</label>
                <input type="number" class="form-control" name="inputHocphi" value="{{$lophoc->hocphi}}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Ghi chú (Chỉ giáo viên xem)</label>
                <input type="text" class="form-control" name="inputGhichu" value="{{$lophoc->ghichu}}">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary pull-right">Lưu thay đổi</button>
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

<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
/* global $ */
  $(function () {
    $('.select2').select2()
    $("#datepicker").datepicker({ format: 'yyyy-mm-dd', autoclose: true });
  })
</script>
@stop