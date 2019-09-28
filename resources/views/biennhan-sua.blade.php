@extends('master')
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SỬA BIÊN NHẬN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa biên nhận</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa thông tin biên nhận</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('staff.ticket.edit.post', ['case_id' => $ticket->id])}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSostt">Tên Khách Hàng:</label> {{$ticket->client -> ten}}   |   
                    <label for="inputSostt">Số Điện Thoại:</label> {{$ticket->client -> sdt}}    |    
                    <label for="inputSostt">Ngày Sinh:</label> {{$ticket->client -> ngaysinh}}
                    <input name="inputKhachhang" type="hidden" class="form-control" value="{{$ticket->client -> id}}">
                  </div>
                  <div class="form-group">
                    <label for="inputStt">Biên nhận số:</label>
                    <input name="inputStt" type="text" class="form-control" id="inputSostt" value="{{$ticket -> id}}" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="inputYeucau">Yêu cầu khách hàng:</label>
                    <input name="inputYeucau" type="text" class="form-control" id="inputYeucau" value="{{$ticket -> yeucau}}" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="inputDongmay">Dòng máy:</label>
                    <input name="inputDongmay"type="text" class="form-control" id="inputDongmay" value="{{$ticket -> dongmay}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputCpu">CPU:</label>
                    <input name="inputCpu" type="text" class="form-control" id="inputCpu" value="{{$ticket -> cpu}}">
                  </div>
                  <div class="form-group">
                    <label for="inputRam">Dung lượng RAM:</label>
                    <input name="inputRam" type="text" class="form-control" id="inputRam" value="{{$ticket -> ram}}">
                  </div>
                  <div class="form-group">
                    <label for="inputOcung">Dung lượng ổ cứng:</label>
                    <input name="inputOcung" type="text" class="form-control" id="inputOcung" value="{{$ticket -> ocung}}">
                  </div>
                  <div class="form-group">
                    <label for="inputTinhtrang">Tình trạng máy:</label>
                    <input name="inputTinhtrang" type="text" class="form-control" id="inputTinhtrang" value="{{$ticket -> tinhtrang}}">
                  </div>
                  <div class="form-group">
                    <label for="inputPhukien">Phụ kiện kèm theo:</label>
                    <input name="inputPhukien" type="text" class="form-control" id="inputPhukien" value="{{$ticket -> khac}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Lưu chỉnh sửa</button>
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