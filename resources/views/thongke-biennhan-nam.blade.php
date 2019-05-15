@extends('master')
@section('head')
<title>DEMO20 | Thống kê biên nhận năm {{$namthongke}}</title>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>THỐNG KÊ</h1>
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
    <div class="row">
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title">Tổng kết máy nhận {{$namthongke}}</h3>
          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <!-- AREA CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Số lượng máy nhận {{$namthongke}}</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="areaChart" style="height:250px"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title">Tổng kết máy nhận 3 tháng Quý 1</h3>
          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <!-- AREA CHART -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Số lượng máy nhận 3 tháng Quý 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="areaChartQuy1" style="height:250px"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
@section('script')
<!-- ChartJS 1.0.1 -->
<!-- FastClick -->
<script src="{{secure_asset('plugins/fastclick/fastclick.js')}}"></script>
<script src="{{secure_asset('plugins/chartjs-old/Chart.min.js')}}"></script>
<script>
  $(function () {
      
    //--------------
    //- AREA CHART -
    //--------------
    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)
  
    var areaChartData = {
      labels  : ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
      datasets: [
        {
          label               : 'Số lượng biên nhận',
          fillColor           : 'rgba(60,141,188,0)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : {{$tongsobiennhan}}
        }
      ]
    }
    
    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : true,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }
    
    areaChart.Line(areaChartData, areaChartOptions)
    
    var areaChartCanvasQuy1 = $('#areaChartQuy1').get(0).getContext('2d')
    var areaChartQuy1       = new Chart(areaChartCanvasQuy1)
    var areaChartDataQuy1 = {
      labels  : ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
      datasets: [
        {
          label               : 'Số lượng biên nhận',
          fillColor           : 'rgba(60,141,188,0)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : {{$biennhantheoquy[0]}}
        },
        {
          label               : 'Số lượng biên nhận',
          fillColor           : 'rgb(26, 245, 0, 0)',
          strokeColor         : 'rgb(26, 245, 0, 0.8)',
          pointColor          : '#17bd0c',
          pointStrokeColor    : 'rgba(60, 141, 188, 1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60, 141, 188, 1)',
          data                : {{$biennhantheoquy[1]}}
        },
        {
          label               : 'Số lượng biên nhận',
          fillColor           : 'rgba(255, 0, 0, 0)',
          strokeColor         : 'rgba(255, 0, 0, 0.8)',
          pointColor          : '#ca0808',
          pointStrokeColor    : 'rgba(60, 141, 188, 1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60, 141, 188, 1)',
          data                : {{$biennhantheoquy[2]}}
        },
      ]
    }
    areaChartQuy1.Line(areaChartDataQuy1, areaChartOptions)
  })
</script>
@stop