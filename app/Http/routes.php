<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/download', 'TaiveController@getDanhsachCongkhai');
Route::get('/tracking', 'TrackingController@getTimkiem');
Route::post('/search', 'TrackingController@postTracking');
Route::get('/tracking/{biennhan_id}', 'TrackingController@getByBiennhan');
Route::get('/customer/{khachhang_id}', 'TrackingController@getByKhachhang');

Route::get('/dangnhap','DangnhapController@getDangnhap');
Route::post('/dangnhap','DangnhapController@postDangnhap');
Route::group(['prefix' => '','middleware' => 'nhanvien'], function() {
    Route::get('/dangxuat','DangnhapController@getDangxuat');
    
    Route::get('/', function() { return redirect('/biennhan'); });
    Route::get('/timkiem', 'TimkiemController@getTimkiem');
    
    Route::get('/khachhang', 'KhachhangController@getDanhsach');
    Route::get('/xemkhachhang/{khachhang_id}', 'KhachhangController@getXemkhachhang');
    Route::get('/timkhachhang', 'KhachhangController@getTimkhachhang');
    Route::post('/timkhachhang', 'KhachhangController@postTimkhachhang');
    Route::post('/nhapkhachhang', 'KhachhangController@postNhapkhachhang');
    Route::get('/suakhachhang/{khachhang_id}', 'KhachhangController@getSuakhachhang');
    Route::post('/suakhachhang/', 'KhachhangController@postSuakhachhang');
    
    Route::get('/taichinh', 'TaichinhController@getTongquan');
    Route::get('/taichinh/{danhmuc_id}', 'TaichinhController@getDanhmuc');

    Route::get('/phieuthu', 'PhieuthuController@getDanhsach');
    Route::get('/danhmuc/{danhmuc_id}', 'PhieuthuController@getDanhsach');
    Route::get('/xemphieuthu/{phieuthu_id}', 'PhieuthuController@getXemphieuthu');
    Route::get('/inphieuthu/{phieuthu_id}', 'PhieuthuController@getInphieuthu');
    Route::get('/nhapphieuthu/{khachhang_id}', 'PhieuthuController@getNhapphieuthu');
    Route::post('/nhapphieuthu/', 'PhieuthuController@postNhapphieuthu');

    Route::get('/phieuchi', 'PhieuchiController@getDanhsach');
    Route::get('/nhapphieuchi/{khachhang_id}', 'PhieuchiController@getNhapphieuchi');
    Route::post('/nhapphieuchi/', 'PhieuchiController@postNhapphieuchi');
    Route::get('/xemphieuchi/{phieuchi_id}', 'PhieuchiController@getXemphieuchi');
    
    Route::get('/biennhan/timsdt', 'BiennhanController@getTimSDT');
    Route::get('/biennhan/', 'BiennhanController@getDanhsach');
    Route::post('/biennhan/timsdt', 'BiennhanController@postTimSDT');
    Route::get('/xembiennhan/{biennhan_id}', 'BiennhanController@getXembiennhan');
    Route::get('/xembiennhan/{biennhan_id}/hoanthanh', 'BiennhanController@getHoanThanh');
    Route::get('/inbiennhan/{biennhan_id}', 'BiennhanController@getInbiennhan');
    Route::get('/suabiennhan/{biennhan_id}', 'BiennhanController@getSuabiennhan');
    Route::post('/suabiennhan/', 'BiennhanController@postSuabiennhan');
    Route::get('/nhapbiennhan/{khachhang_id}', 'BiennhanController@getNhapbiennhantheosdt');
    Route::post('/nhapbiennhan/', 'BiennhanController@postNhapbiennhan');
    Route::get('/nhapbiennhan/{khachhang_id}/sudung/{biennhan_id}', 'BiennhanController@getSudungbiennhan');
    Route::get('/xembiennhan/{biennhan_id}/trangthai/{trangthai_id}', 'BiennhanController@getDoitrangthai');
    
    Route::get('/nhatky', 'NhatkyController@getDanhsach');
    Route::post('/nhapnhatky', 'NhatkyController@postNhapnhatky');
    Route::get('/nhatky/{nhatky_id}/congkhai', 'NhatkyController@getCongkhai');
    
    Route::get('/lophoc/', 'LophocController@getDanhsach');
    Route::get('/xemlophoc/{lophoc_id}', 'LophocController@getXemlophoc');
    Route::get('/danhsachsdt/{lophoc_id}', 'LophocController@getDanhsachsdt');
    Route::get('/nhaplophoc/', 'LophocController@getNhaplophoc');
    Route::post('/nhaplophoc/', 'LophocController@postNhaplophoc');
    Route::get('/sualophoc/{lophoc_id}', 'LophocController@getSualophoc');
    Route::post('/sualophoc/', 'LophocController@postSualophoc');
    Route::get('/themhocvien/{khachhang_id}', 'LophocController@getThemhocvien');
    Route::post('/themhocvien', 'LophocController@postThemhocvien');
    Route::get('/themhocvien/{khachhang_id}/vaolop/{lophoc_id}', 'LophocController@getThemhocvienVaolop');
    Route::get('/suahocvien/{danhsach_id}', 'LophocController@getSuahocvien');
    Route::post('/suahocvien/', 'LophocController@postSuahocvien');
    Route::get('/xoahocvien/{danhsach_id}', 'LophocController@getXoahocvien');
    
    Route::get('/nhanvien/canhan', 'NhanvienController@getCanhan');
    Route::post('/nhanvien/canhan', 'NhanvienController@postSuacanhan');
    
    Route::get('/thongke/biennhan/{year}', 'ThongkeController@getBiennhanTheonam');
    
    Route::get('/taive', 'TaiveController@getDanhsach');
    Route::get('/themtaive', 'TaiveController@getThemtaive');
    Route::post('/themtaive', 'TaiveController@postThemtaive');
    Route::get('/xoataive/{taive_id}', 'TaiveController@getXoa');
    Route::get('/suataive/{taive_id}', 'TaiveController@getSua');
    Route::post('/suataive', 'TaiveController@postSua');
});

Route::get('/test', function () {
    $phat = App\Model\biennhan::find(364);
    $phat->tiendo = 2;
    $phat->save();
    echo 'ok';
});