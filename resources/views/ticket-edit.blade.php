@extends('master')
@section('title')
  <title>SYS BDS</title>
@endsection
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item">Sửa thông tin bán BDS </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row offset-3">
      <!-- general form elements -->
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header text-center text-uppercase" style="color:#FFFFFF">
                <h3 class="card-title">Sửa thông tin bán BDS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('staff.ticket.edit.post')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSostt">Tên Khách Hàng:</label> {{ $ticket->client->name }}   |   
                    <label for="inputSostt">Số Điện Thoại:</label> {{ $ticket->client->phone }}    |    
                    <label for="inputSostt">Ngày Sinh:</label> {{ $ticket->client->birthday }}
                    <input type="hidden" name="client_id" value="{{ $ticket->client->id }}">
                    <input type="hidden" name="staff_id" value="{{ $ticket->staff_id }}">
                    <input type="hidden" name="ticket_status_id" value="{{ $ticket->ticket_status_id }}">
                  </div>
                  <div class="form-group">
                    <label for="id">Mã BDS:</label>
                    <input name="id" type="text" class="form-control" id="id" value="{{$ticket -> id}}" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input name="address" type="text" class="form-control" id="address" value="{{$ticket -> address}}" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="description">Mô tả chi tiết:</label>
                    <input name="description"type="text" class="form-control" id="description" value="{{$ticket -> description}}" required>
                  </div>
                  <div class="form-group">
                    <label for="length">Chiều dài:</label>
                    <input name="length" type="number" class="form-control" id="length" value="{{$ticket -> length}}">
                  </div>
                  <div class="form-group">
                    <label for="width">Chiều rộng:</label>
                    <input name="width" type="number" class="form-control" id="width" value="{{$ticket -> width}}">
                  </div>
                  <div class="form-group">
                    <label for="manager">Người quản lý dự án:</label>
                    <input name="manager" type="text" class="form-control" id="manager" value="{{$ticket -> manager}}">
                  </div>
                  <div class="form-group">
                    <label for="note">Giá:</label>
                    <input name="price" type="number" class="form-control" id="price" value="{{$ticket -> price}}">
                  </div>
                  <div class="form-group">
                    <label for="other">Ngày hẹn:</label>
                    <input name="other" type="text" class="form-control" id="other" value="{{$ticket -> other}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">Lưu chỉnh sửa</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-secondary"><a onclick="history.go(-1);">Quay lại</a></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop