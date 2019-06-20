<body>
  <table style="width:100%">
    <tr>
      <th>Họ Tên</th>
      <th>Số điện Thoại</th> 
      <th>Email</th>
      <th>Zalo</th>
      <th>Ngành học</th>
      <th>Ngày sinh</th>
      <th>Số tiền ưu đãi</th>
      <th>Số tiền phải đóng</th>
      <th>Đã thu</th>
      <th>Còn lại</th>
      <th>Ưu đãi</th>
    </tr>
    @foreach($danhsachs as $data)
    <tr>
      <td>{{$data->rlsKhachhang->ten}}</td>
      <td>{{$data->rlsKhachhang->sdt}}</td>
      <td>{{$data->rlsKhachhang->email}}</td>
      <td>{{$data->rlsKhachhang->zalo}}</td>
      <td>{{$data->rlsKhachhang->nganhhoc}}</td>
      <td>{{$data->rlsKhachhang->ngaysinh}}</td>
      <td>{{$data->uudai}}</td>
      <td>{{$data->rlsLophoc->hocphi - ($data->rlsLophoc->hocphi*$data->uudai/100)}}</td>
      <td>{{$data->dadong}}</td>
      <td>{{($data->rlsLophoc->hocphi - ($data->rlsLophoc->hocphi*$data->uudai/100)) - $data->dadong}}</td>
      <td>{{$data->ghichu}}</td>
    </tr>
    @endforeach
  </table>
</body>