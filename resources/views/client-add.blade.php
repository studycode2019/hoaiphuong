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
            {{-- <h1>THÊM KHÁCH HÀNG</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm khách hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

    @if (count($errors) > 0) 
    @foreach ($errors->all() as $error) 
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Thất bại!</h4> {!! $error !!}
      </div>
    @endforeach
    @endif
    <div class="row offset-3">
      <div class="col-md-6">
      <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header text-uppercase text-center">
                <h3 class="card-title">THÔNG TIN KHÁCH HÀNG</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('staff.client.add.post')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSdt">Số điện thoại *:</label>
                    <input name="phone" type="number" class="form-control" id="phone" @if(isset($phone)) value="{{$phone}}" readonly="readonly" @endif>
                  </div>
                  <div class="form-group">
                    <label for="name">Tên khách hàng *:</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nhập vào tên khách hàng" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="birthday">Ngày sinh:</label>
                    <input name="birthday" type="date" class="form-control" id="birthday" required>
                  </div>
                  <p style="color: red; font-weight: bold">THÔNG TIN DƯỚI ĐÂY LÀ BẮT BUỘC ĐỐI KHÁCH HÀNG</p>
                  <div class="form-group">
                    <label for="zalo">Số chứng minh nhân dân - Căn cước:</label>
                    <input name="zalo" type="number" class="form-control" id="zalo" placeholder="Số chứng minh nhân dân - Căn cước">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Địa chỉ thư điện tử" >
                  </div>
                  <div class="form-group">
                    <label for="major">Nơi đăng ký HKTT:</label>
                    <input name="major" type="text" class="form-control" id="major" placeholder="Số nhà - Phường - Quận - Thành Phố" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="row">
                    <div class="col-6 text-right">
                        <button type="submit" class="btn btn-primary">Thêm vào</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-secondary"><a onclick="history.go(-1);">Quay lại</a></button>
                        
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop