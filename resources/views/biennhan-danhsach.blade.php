@extends('master')
@section('head')
<title>DEMO20 | Sổ biên nhận</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
@stop
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SỔ BIÊN NHẬN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sổ biên nhận</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách biên nhận</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="d-none d-md-table-cell">Ngày/Tháng</th>
                  <th>Số phiếu</th>
                  <th>Dòng Máy</th>
                  <th>Tên khách hàng</th>
                  <th class="d-none d-md-table-cell">Số điện thoại</th>
                  <th>Tiến độ</th>
                  <th class="d-none d-md-table-cell"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($biennhans as $biennhan)
                <tr>
                  <td class="d-none d-md-block d-lg-block">{{date("d/m/Y", strtotime($biennhan->created_at))}}</td>
                  <td>{{$biennhan->id}}</td>
                  <td><a href="/xembiennhan/{{$biennhan->id}}">{{$biennhan->dongmay}}</a></td>
                  <td>{{$biennhan->rlsKhachhang->ten}}</td>
                  <td class="d-none d-md-block d-lg-block">{{$biennhan->rlsKhachhang->sdt}}</td>
                  <td>
                    <span class="badge bg-{{$biennhan->rlsTrangthai->class}}">{{$biennhan->rlsTrangthai->ten}}</span>
                  </td>
                  <td class="d-none d-md-block d-lg-block">
                    <div class="btn-group">
                    <a href="/xembiennhan/{{$biennhan->id}}" class="btn btn-primary">Xem</a>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="/inbiennhan/{{$biennhan->id}}" target="_blank">In biên nhận</a>
                    </div>
                  </div>
                  </td>
                </tr>
                @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop

@section('script')
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
        "order": false,
        // "order": [[ 5, "desc" ]],
        "language": {
        	"sProcessing":   "Đang xử lý...",
        	"sLengthMenu":   "Xem _MENU_ mục",
        	"sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
        	"sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
        	"sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
        	"sInfoFiltered": "(được lọc từ _MAX_ mục)",
        	"sInfoPostFix":  "",
        	"sSearch":       "Tìm:",
        	"sUrl":          "",
        	"oPaginate": {
        		"sFirst":    "Đầu",
        		"sPrevious": "Trước",
        		"sNext":     "Tiếp",
        		"sLast":     "Cuối"
        	}
        }
    });
  });

</script>
@stop