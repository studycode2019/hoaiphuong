@extends('master')
@section('head')
<title>SYS BDS</title>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1>THÊM BDS MỚI</h1> --}}
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thêm bất động sản mới</li>
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
      @if(count($client->tickets)>0)
      <div class="card card-default">
          <!--<div class="card-header with-border">-->
          <!--  <h3 class="card-title">Biên nhận trước đó</h3>-->
          <!--</div>-->
          <!-- /.box-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>ID</th>
                <th>Địa chỉ</th>
                <th>Chi tiết lịch sử</th>
                <th></th>
              </tr>
              @foreach($client->tickets as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->address}}</td>
                <td>Chiều dài: {{$data->length}}, Chiều rộng: {{$data->width}}, Người nhận dự án: {{$data->manager}}</td>
                <td><a href="{{route('staff.ticket.useold.get', ['case_id' => $data->id])}}" class="btn btn-block btn-primary">Sử dụng</a></td>
              </tr>
              @endforeach
            </table>
          </div>
      </div>
      @endif
      <div class="row offset-3">
        <div class="col-md-6">
            <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center text-uppercase">Thêm thông tin bất động sản</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('staff.ticket.add.post')}}" method="post">
          {{csrf_field()}}
          <div class="card-body">
            <div class="form-group">
              <label for="inputSostt">Tên Khách Hàng:</label> {{$client->name}}   |   
              <label for="inputSostt">Số Điện Thoại:</label> {{$client->phone}}    |    
              <label for="inputSostt">Ngày Sinh:</label> {{date("d/m/Y", strtotime($client->birthday))}}
              <input name="client_id" type="hidden" class="form-control" value="{{$client->id}}">
              {{-- <input name="staff_id" type="hidden" class="form-control" value="{{UserInfo()->id}}"> --}}
            </div>
            <div class="form-group">
                <label for="manager">Người nhận dự án:</label> {{ UserInfo()->name }} 
                {{-- <input name="manager" type="text" class="form-control" id="manager" value="{{ UserInfo()->name }}"> --}}
            </div>
            <div class="form-group">
              <label for="address">Địa chỉ:</label>
              <input name="address" type="text" class="form-control" id="address" placeholder="Địa chỉ cụ thể,..." autofocus required>
            </div>
            <div class="form-group">
              <label for="description">Mô tả chi tiết:</label>
              <input name="description"type="text" class="form-control" id="description" placeholder="Gần trường học, bệnh viện,..." @if(isset($ticket_old)) value="{{$ticket_old->model}}" @endif required>
            </div>
            <div class="form-group">
              <label for="length">Chiều dài:</label>
              <input name="length" type="number" class="form-control" id="length" placeholder="Tính đơn vị mét vuông" @if(isset($ticket_old)) value="{{$ticket_old->length}}" @endif required>
            </div>
            <div class="form-group">
              <label for="width">Chiều rộng:</label>
              <input name="width" type="number" class="form-control" id="width" placeholder="Tính đơn vị mét vuông" @if(isset($ticket_old)) value="{{$ticket_old->width}}" @endif required>
            </div>
            <div class="form-group">
              <label for="note">Giá:</label>
              <input name="price" type="number" class="form-control" id="price" required>
            </div>
            <div class="form-group">
              <label for="other">Ghi chú:</label>
              <input name="other" type="text" class="form-control" id="other" placeholder="Khách hàng muốn làm gì,..." required>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-md-6 text-right">
                  <button type="submit" class="btn btn-primary">Đăng ký bán</button>
              </div>
              <div class="col-md-6">
                  <button type="submit" class="btn btn-secondary"><a onclick="history.go(-1);">Quay lại</a></button>
              </div>
            </div>
            
          </div>
        </form>
      </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop