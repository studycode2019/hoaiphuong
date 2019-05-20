@extends('master')
@section('head')
<title>DEMO20 | Nhập biên nhận mới</title>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>NHẬP BIÊN NHẬN</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Nhập biên nhận</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- general form elements -->
    <div class="col-md-12">
      @if(count($biennhans)>0)
      <div class="card card-default">
          <!--<div class="card-header with-border">-->
          <!--  <h3 class="card-title">Biên nhận trước đó</h3>-->
          <!--</div>-->
          <!-- /.box-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>ID</th>
                <th>Dòng máy</th>
                <th>Cấu hình</th>
                <th></th>
              </tr>
              @foreach($biennhans as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->dongmay}}</td>
                <td>Dòng máy {{$data->cpu}}, CPU {{$data->cpu}}, RAM {{$data->ram}}, Ổ CỨNG {{$data->ocung}}</td>
                <td><a href="/nhapbiennhan/{{$khachhang->id}}/sudung/{{$data->id}}" class="btn btn-block btn-primary">Sử dụng</a></td>
              </tr>
              @endforeach
            </table>
          </div>
      </div>
      @endif
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Nhập thông tin biên nhận</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/nhapbiennhan" method="post">
          {{csrf_field()}}
          <div class="card-body">
            <div class="form-group">
              <label for="inputSostt">Tên Khách Hàng:</label> {{$khachhang -> ten}}   |   
              <label for="inputSostt">Số Điện Thoại:</label> {{$khachhang -> sdt}}    |    
              <label for="inputSostt">Ngày Sinh:</label> {{date("d/m/Y", strtotime($khachhang -> ngaysinh))}}
              <input name="inputKhachhang" type="hidden" class="form-control" value="{{$khachhang -> id}}">
            </div>
            <div class="form-group">
              <label for="inputYeucau">Yêu cầu khách hàng:</label>
              <input name="inputYeucau" type="text" class="form-control" id="inputYeucau" placeholder="Cần xử lý những gì?" autofocus required>
            </div>
            <div class="form-group">
              <label for="inputDongmay">Dòng máy:</label>
              <input name="inputDongmay"type="text" class="form-control" id="inputDongmay" placeholder="Asus N53TK, Dell Inspiron 15,..." @if(isset($biennhancu)) value="{{$biennhancu->dongmay}}" @endif required>
            </div>
            <div class="form-group">
              <label for="inputCpu">CPU:</label>
              <input name="inputCpu" type="text" class="form-control" id="inputCpu" placeholder="AMD AX, Intel iX-1234,..." @if(isset($biennhancu)) value="{{$biennhancu->cpu}}" @endif required>
            </div>
            <div class="form-group">
              <label for="inputRam">Dung lượng RAM:</label>
              <input name="inputRam" type="text" class="form-control" id="inputRam" placeholder="Bao nhiêu GB?" @if(isset($biennhancu)) value="{{$biennhancu->ram}}" @endif required>
            </div>
            <div class="form-group">
              <label for="inputOcung">Dung lượng ổ cứng:</label>
              <input name="inputOcung" type="text" class="form-control" id="inputOcung" placeholder="Bao nhiêu GB?" @if(isset($biennhancu)) value="{{$biennhancu->ocung}}" @endif required>
            </div>
            <div class="form-group">
              <label for="inputTinhtrang">Tình trạng máy:</label>
              <input name="inputTinhtrang" type="text" class="form-control" id="inputTinhtrang" placeholder="Bình thường, Tình trạng Pin,..." required>
            </div>
            <div class="form-group">
              <label for="inputPhukien">Phụ kiện kèm theo:</label>
              <input name="inputPhukien" type="text" class="form-control" id="inputPhukien" placeholder="Sạc, túi chống sốc,..." required>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm vào</button>
            <a onclick="history.go(-1);" class="btn">Quay lại</a>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop