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
              <form role="form" action="{{route('staff.cases.edit.post', ['case_id' => $biennhan->id])}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSostt">Tên Khách Hàng:</label> {{$khachhang -> ten}}   |   
                    <label for="inputSostt">Số Điện Thoại:</label> {{$khachhang -> sdt}}    |    
                    <label for="inputSostt">Ngày Sinh:</label> {{$khachhang -> ngaysinh}}
                    <input name="inputKhachhang" type="hidden" class="form-control" value="{{$khachhang -> id}}">
                  </div>
                  <div class="form-group">
                    <label for="inputStt">Biên nhận số:</label>
                    <input name="inputStt" type="text" class="form-control" id="inputSostt" value="{{$biennhan -> id}}" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="inputYeucau">Yêu cầu khách hàng:</label>
                    <input name="inputYeucau" type="text" class="form-control" id="inputYeucau" value="{{$biennhan -> yeucau}}" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="inputDongmay">Dòng máy:</label>
                    <input name="inputDongmay"type="text" class="form-control" id="inputDongmay" value="{{$biennhan -> dongmay}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputCpu">CPU:</label>
                    <input name="inputCpu" type="text" class="form-control" id="inputCpu" value="{{$biennhan -> cpu}}">
                  </div>
                  <div class="form-group">
                    <label for="inputRam">Dung lượng RAM:</label>
                    <input name="inputRam" type="text" class="form-control" id="inputRam" value="{{$biennhan -> ram}}">
                  </div>
                  <div class="form-group">
                    <label for="inputOcung">Dung lượng ổ cứng:</label>
                    <input name="inputOcung" type="text" class="form-control" id="inputOcung" value="{{$biennhan -> ocung}}">
                  </div>
                  <div class="form-group">
                    <label for="inputTinhtrang">Tình trạng máy:</label>
                    <input name="inputTinhtrang" type="text" class="form-control" id="inputTinhtrang" value="{{$biennhan -> tinhtrang}}">
                  </div>
                  <div class="form-group">
                    <label for="inputPhukien">Phụ kiện kèm theo:</label>
                    <input name="inputPhukien" type="text" class="form-control" id="inputPhukien" value="{{$biennhan -> khac}}">
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