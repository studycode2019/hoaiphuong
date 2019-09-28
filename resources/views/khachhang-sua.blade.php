@extends('master')
@section('head')
<title>DEMO20 | Sửa khách hàng: {{$client->ten}}</title>
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
    
    @if (count($errors) > 0) 
    @foreach ($errors->all() as $error) 
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Thất bại!</h4> {!! $error !!}
      </div>
    @endforeach
    @endif
    
      <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nhập thông tin khách hàng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('staff.client.edit.post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$client->id}}"/>
                <div class="card-body">
                  <div class="form-group">
                    <label for="sdt">Số điện thoại:</label>
                    <input name="sdt" pattern="[0-9]{10}" class="form-control" id="sdt" value="{{$client->sdt}}" autofocus required>
                  </div>
                  <div class="form-group">
                    <label for="ten">Tên khách hàng:</label>
                    <input name="ten" type="text" class="form-control" id="ten" value="{{$client->ten}}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputNgaysinh">Ngày sinh:</label>
                    <input name="ngaysinh" type="date" class="form-control" id="ngaysinh" value="{{$client->ngaysinh}}">
                  </div>
                  <div class="form-group">
                    <label for="zalo">Zalo:</label>
                    <input name="zalo" type="number" class="form-control" id="zalo" value="{{$client->zalo}}" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="text" class="form-control" id="email" value="{{$client->email}}" >
                  </div>
                  <div class="form-group">
                    <label for="nganhhoc">Ngành học:</label>
                    <input name="nganhhoc" type="text" class="form-control" id="nganhhoc" value="{{$client->nganhhoc}}" >
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