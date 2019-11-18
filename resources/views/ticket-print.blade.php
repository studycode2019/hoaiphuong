<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SYS DELI | In biên nhận thiết kế</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicfwidthework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      @foreach(array("Liên 2: Giao khách") as $solien)
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-8 offset-md-4">
            <h2 class="page-header">
              <i class="fa fa-wrench"></i>  <b>BIÊN NHẬN THIẾT KẾ</b>
              <small class="float-right"><b>SỐ PHIẾU #{{ $ticket -> id }}</b></small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-5 invoice-col">
            {{$solien}}
            <address>
              <strong>DELI for any one Cần Thơ</strong><br>
              P. An Khánh, Q. Ninh Kiều, TP. Cần Thơ<br>
              <b>Số điện thoại:</b> 097-151-70-74<br>
              <b>Email:</b> hotrothietke@deli4ne1.com<br>
              <b>Website:</b> deli4ne1.com<br>
              <b>Facebook:</b> https://www.facebook.com/thietkedeli/
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-5 invoice-col">
            <u>Thông tin khách hàng:</u>
            <address>
              <strong class="text-uppercase">{{ $ticket->client->name }}</strong><br>
              <b>Số điện thoại:</b> {{ PhoneFormat($ticket->client->phone) }}<br>
              <b>Ngày sinh:</b> {{ date("d/m/Y", strtotime($ticket->client->birthday)) }}<br>
              <b>Mã khách hàng:</b> KH{{ $ticket->client->id }}<br>
              <b>Ngày nhận thiết kế:</b> {{ $ticket->created_at->timezone('Asia/Ho_Chi_Minh')->format("d/m/Y - H:i") }}<br>
              <b>Nhân viên nhận:</b> {{ $ticket->staff->name }}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-2 invoice-col">
            <div class="float-right"><img src="/images/QUET.png" /></div>
            <div class="float-right">{!! QrCode::size(170)->margin(0)->generate('http://sys.deli4ne1.com/tracking/'.$ticket->id) !!}</div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Table row -->
        <div class="row">
          <div class="col-10">
            <address>
              <h5 class="text-uppercase">
                  <b>Yêu cầu khách hàng:</b> {{ $ticket -> address }}
              </h5>
            </address>
          </div>
          <div class="col-2">
            <div class="float-right"></div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Table row -->
        <div class="row">
          <div class="col-6 table-responsive">
            <table class="table table-striped table table-bordered">
              <tbody>
                <tr>
                  <td class="text-uppercase" style="width: 200px"><b>Nội dung thiết kế</b></h5></td>
                  <td class="text-uppercase">{{ $ticket -> description }}</h5></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="width: 200px"><b>Màu sắc</b></h5></td>
                  <td class="text-uppercase">{{ $ticket -> length }}</h5></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-6 table-responsive">
            <table class="table table-striped table table-bordered">
              <tbody>
                <tr>
                  <td class="text-uppercase" style="width: 200px"><b>Kích thước yêu cầu</b></h5></td>
                  <td class="text-uppercase">{{ $ticket -> width }}</h5></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="width: 200px"><b>Biểu tượng</b></h5></td>
                  <td class="text-uppercase">{{ $ticket -> manager }}</h5></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12 table-responsive">
            <table class="table table-striped table table-bordered">
              <tbody>
                <tr>
                  <td class="text-uppercase" style="width: 200px"><b>Phụ kiện kèm theo</b></h5></td>
                  <td class="text-uppercase">{{ $ticket -> other }}</h5></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="width: 200px"><b>Tình trạng máy</b></h5></td>
                  <td class="text-uppercase">{{ $ticket -> note }}</h5></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <div class="row">
          <div class="col-md-12"><h5><b>* Xin quý khách mang theo phiếu này khi đến nhận máy.
          <br/>** Quý khách hàng có thể kiểm tra tình trạng sửa chữa máy của mình tại http://sys.catotek.com/tracking/{{$ticket->id}}.
          </b></h5></div>
        </div>
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-md-4 offset-md-2">
            <p class="lead">NHÂN VIÊN</p>
          </div>
          <!-- /.col -->
          <div class="col-md-4 offset-md-2">
            <p class="lead">KHÁCH HÀNG</p>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
      @endforeach
    </div>
    <!-- ./wrapper -->
  </body>
  <script type="text/javascript">
    // window.onload = function() {
    //   window.print()
    // };
  </script>
</html>