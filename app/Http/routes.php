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
    
    Route::get('/', function() { return redirect()->route('staff.ticket.list.get'); })->name('staff.home.get');
    Route::get('/search', 'SearchController@getSearch')->name('staff.search.get');
    
    Route::group(['prefix' => 'clients'], function() 
    {
        Route::get('/', 'ClientsController@getList')->name('staff.client.list.get');
        Route::get('/search', 'ClientsController@getSearch')->name('staff.client.search.get');
        Route::post('/search', 'ClientsController@postSearch')->name('staff.client.search.post');
        Route::get('/{client_id}', 'ClientsController@getView')->where('client_id', '[0-9]+')->name('staff.client.view.get');
        Route::get('/add/{phone?}', 'ClientsController@getAdd')->name('staff.client.add.get');
        Route::post('/add', 'ClientsController@postAdd')->name('staff.client.add.post');
        Route::get('/edit/{client_id}', 'ClientsController@getEdit')->name('staff.client.edit.get');
        Route::post('/edit', 'ClientsController@postEdit')->name('staff.client.edit.post');
        Route::get('/export/excel/edu', 'ClientsController@getExportExcelEdu')->name('staff.client.exportexceledu.get');
        Route::get('/export/excel/tech', 'ClientsController@getExportExcelTech')->name('staff.client.exportexceltech.get');
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
    
    Route::group(['prefix' => 'tickets'], function() 
    {
        Route::get('/', 'TicketsController@getList')->name('staff.ticket.list.get');
        Route::get('/searchByPhone', 'TicketsController@getSearchByPhone')->name('staff.ticket.seachbyphone.get');
        Route::post('/searchByPhone', 'TicketsController@postSearchByPhone')->name('staff.ticket.seachbyphone.post');
        Route::get('/{ticket_id}', 'TicketsController@getView')->where('ticket_id', '[0-9]+')->name('staff.ticket.view.get');
        Route::get('/print/{ticket_id}', 'TicketsController@getPrint')->name('staff.ticket.print.get');
        Route::get('/printpos/{ticket_id}', 'TicketsController@getPrintPos')->name('staff.ticket.printpos.get');
        Route::get('/printinternal/{ticket_id}', 'TicketsController@getPrintInternal')->name('staff.ticket.printinternal.get');
        Route::get('/edit/{ticket_id}', 'TicketsController@getEdit')->name('staff.ticket.edit.get');
        Route::post('/edit', 'TicketsController@postEdit')->name('staff.ticket.edit.post');
        Route::get('/add/{client_id}', 'TicketsController@getAdd')->name('staff.ticket.add.get');
        Route::post('/add', 'TicketsController@postAdd')->name('staff.ticket.add.post');
        Route::get('/add/{client_id}/old/{ticket_id}', 'TicketsController@getUseOld')->name('staff.ticket.useold.get');
        Route::get('/view/{ticket_id}/status/{status_id}', 'TicketsController@getChangeStatus')->name('staff.ticket.changestatus.get');
    });
    
    Route::group(['prefix' => 'ticketlogs'], function() 
    {
        Route::get('/', 'TicketLogController@getList')->name('staff.ticketlog.list.get');
        Route::post('/add', 'TicketLogController@postAdd')->name('staff.ticketlog.add.post');
        Route::get('/{ticketlog_id}/setpublic', 'TicketLogController@getSetpublic')->name('staff.ticketlog.setpublic.get');
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

    Route::group(['prefix' => 'coursestudents'], function ()
    {
        Route::get('/add/{client_id}', 'CourseStudentController@getAdd')->name('staff.coursestudent.add.get');
        Route::post('/add', 'CourseStudentController@postAdd')->name('staff.coursestudent.add.post');
        Route::get('/add/{client_id}/toclass/{class_id}', 'CourseStudentController@getAddnow')->name('staff.coursestudent.addnow.get');
        Route::get('/edit/{coursestudent_id}', 'CourseStudentController@getEdit')->name('staff.coursestudent.edit.get');
        Route::post('/edit', 'CourseStudentController@postEdit')->name('staff.coursestudent.edit.post');
        Route::get('/delete/{coursestudent_id}', 'CourseStudentController@getDelete')->name('staff.coursestudent.delete.get');  
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