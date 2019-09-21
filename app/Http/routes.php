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

Route::get('/login','LoginController@getLogin')->name('guest.login.get');
Route::post('/login','LoginController@postLogin')->name('guest.login.post');
Route::group(['prefix' => '','middleware' => 'staff'], function() 
{
    Route::get('/logout','LoginController@getLogout')->name('staff.logout.get');
    
    Route::get('/', function() { return redirect()->route('staff.cases.list.get'); })->name('staff.home.get');
    Route::get('/search', 'SearchController@getSearch')->name('staff.search.get');
    
    Route::group(['prefix' => 'client'], function() 
    {
        Route::get('/', 'ClientController@getList')->name('staff.client.list.get');
        Route::get('/view/{client_id}', 'ClientController@getView')->name('staff.client.view.get');
        Route::get('/search', 'ClientController@getSearch')->name('staff.client.search.get');
        Route::post('/search', 'ClientController@postSearch')->name('staff.client.search.post');
        Route::post('/add', 'ClientController@postAdd')->name('staff.client.add.post');
        Route::get('/edit/{client_id}', 'ClientController@getEdit')->name('staff.client.edit.get');
        Route::post('/edit', 'ClientController@postEdit')->name('staff.client.edit.post');
        Route::get('/export/excel', 'ClientController@getExportExcel')->name('staff.client.exportexcel.get');
    });
    
    Route::get('/taichinh', 'TaichinhController@getTongquan');
    Route::get('/taichinh/{danhmuc_id}', 'TaichinhController@getDanhmuc');

    Route::group(['prefix' => 'receipt'], function ()
    {
        Route::get('/', 'ReceiptController@getList')->name('staff.receipt.list.get');
        Route::get('/cate/{cate_id}', 'ReceiptController@getListByCate')->name('staff.receipt.listbycate.get');
        Route::get('/view/{receipt_id}', 'ReceiptController@getView')->name('staff.receipt.view.get');
        Route::get('/print/{receipt_id}', 'ReceiptController@getPrint')->name('staff.receipt.print.get');
        Route::get('/add/{client_id}', 'ReceiptController@getAdd')->name('staff.receipt.add.get');
        Route::post('/add', 'ReceiptController@postAdd')->name('staff.receipt.add.post');
    });

    Route::group(['prefix' => 'payment'], function ()
    {
        Route::get('/', 'PaymentController@getList')->name('staff.payment.list.get');
        Route::get('/add/{client_id}', 'PaymentController@getAdd')->name('staff.payment.add.get');
        Route::post('/add', 'PaymentController@postAdd')->name('staff.payment.add.post');
        Route::get('/view/{payment_id}', 'PaymentController@getView')->name('staff.payment.view.get');
    });
    
    Route::group(['prefix' => 'cases'], function() 
    {
        Route::get('/', 'CasesController@getList')->name('staff.cases.list.get');
        Route::get('/searchByPhone', 'CasesController@getSearchByPhone')->name('staff.cases.seachbyphone.get');
        Route::post('/searchByPhone', 'CasesController@postSearchByPhone')->name('staff.cases.seachbyphone.post');
        Route::get('/view/{case_id}', 'CasesController@getView')->name('staff.cases.view.get');
        Route::get('/print/{case_id}', 'CasesController@getPrint')->name('staff.cases.print.get');
        Route::get('/printpos/{case_id}', 'CasesController@getPrintPos')->name('staff.cases.printpos.get');
        Route::get('/printinternal/{case_id}', 'CasesController@getPrintInternal')->name('staff.cases.printinternal.get');
        Route::get('/edit/{case_id}', 'CasesController@getEdit')->name('staff.cases.edit.get');
        Route::post('/edit', 'CasesController@postEdit')->name('staff.cases.edit.post');
        Route::get('/add/{client_id}', 'CasesController@getAdd')->name('staff.cases.add.get');
        Route::post('/add', 'CasesController@postAdd')->name('staff.cases.add.post');
        Route::get('/add/{client_id}/old/{case_id}', 'CasesController@getUseOld')->name('staff.cases.useold.get');
        Route::get('/view/{case_id}/status/{status_id}', 'CasesController@getChangeStatus')->name('staff.cases.changestatus.get');
    });
    
    Route::group(['prefix' => 'caselog'], function() 
    {
        Route::get('/', 'CaselogController@getList')->name('staff.caselog.list.get');
        Route::post('/add', 'CaselogController@postAdd')->name('staff.caselog.add.post');
        Route::get('/{caselog_id}/setpublic', 'CaselogController@getSetpublic')->name('staff.caselog.setpublic.get');
    });
    
    Route::group(['prefix' => 'classes'], function ()
    {
        Route::get('/', 'ClassesController@getList')->name('staff.classes.list.get');
        Route::get('/view/{lophoc_id}', 'ClassesController@getView')->name('staff.classes.view.get');
        Route::get('/export/phone/{lophoc_id}', 'ClassesController@getExportPhone')->name('staff.classes.exportphone.get');
        Route::get('/export/excel/{lophoc_id}', 'ClassesController@getExportExcel')->name('staff.classes.exportexcel.get');
        Route::get('/add', 'ClassesController@getAdd')->name('staff.classes.add.get');
        Route::post('/add', 'ClassesController@postAdd')->name('staff.classes.add.post');
        Route::get('/edit/{lophoc_id}', 'ClassesController@getEdit')->name('staff.classes.edit.get');
        Route::post('/edit', 'ClassesController@postEdit')->name('staff.classes.edit.post');
        Route::get('/log', 'ClassesController@getNhatky')->name('staff.classlog.list.get');
    });

    Route::group(['prefix' => 'classlist'], function ()
    {
        Route::get('/add/{client_id}', 'ClasslistController@getAdd')->name('staff.classlist.add.get');
        Route::post('/add', 'ClasslistController@postAdd')->name('staff.classlist.add.post');
        Route::get('/add/{client_id}/toclass/{class_id}', 'ClasslistController@getAddnow')->name('staff.classlist.addnow.get');
        Route::get('/edit/{classlist_id}', 'ClasslistController@getEdit')->name('staff.classlist.edit.get');
        Route::post('/edit', 'ClasslistController@postEdit')->name('staff.classlist.edit.post');
        Route::get('/delete/{classlist_id}', 'ClasslistController@getDelete')->name('staff.classlist.delete.get');  
    });

    Route::group(['prefix' => 'profile'], function ()
    {
        Route::get('/edit', 'NhanvienController@getCanhan')->name('staff.profile.edit.get');
        Route::post('/edit', 'NhanvienController@postSuacanhan')->name('staff.profile.edit.post');
    });
    
    Route::get('/thongke/biennhan/{year}', 'ThongkeController@getBiennhanTheonam');
    
    Route::group(['prefix' => 'download'], function ()
    {
        Route::get('/', 'DownloadController@getList')->name('staff.download.list.get');
        Route::get('/add', 'DownloadController@getAdd')->name('staff.download.add.get');
        Route::post('/add', 'DownloadController@postAdd')->name('staff.download.add.post');
        Route::get('/delete/{taive_id}', 'DownloadController@getDelete')->name('staff.download.delete.get');
        Route::get('/edit/{taive_id}', 'DownloadController@getEdit')->name('staff.download.edit.get');
        Route::post('/edit', 'DownloadController@postEdit')->name('staff.download.edit.post');
    });
});