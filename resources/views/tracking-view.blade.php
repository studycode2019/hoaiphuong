@extends('tracking-master')
@section('main')
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">THEO DÕI TÌNH TRẠNG MÁY</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Thời gian</th>
                <th>Nội dung</th>
              </tr>
              @foreach ($nhatkys as $data)
              <tr>
                <td>{{date("d/m/Y - h:i", strtotime($data->created_at))}}</td>
                <td>@if($data->congkhai) <i class="fa fa-globe"></i>&nbsp; @endif {{$data->noidung}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <a onclick="history.go(-1);" class="btn btn-block btn-outline-secondary">Quay lại</a>
        </div>
        <!-- /.card-footer -->
      </div>
  @stop