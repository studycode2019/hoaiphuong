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
Route::get('/tracking/{ticket_id}', 'TrackingController@getByTicket');
Route::get('/customer/{client_id}', 'TrackingController@getByClient');

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

    Route::group(['prefix' => 'financial'], function() 
    {
        Route::get('/', 'FinancialController@getTongquan');
        Route::get('/{field_id}', 'FinancialController@getField');
    });

    Route::group(['prefix' => 'receipts'], function ()
    {
        Route::get('/', 'ReceiptsController@getList')->name('staff.receipt.list.get');
        Route::get('/field/{field_id}', 'ReceiptsController@getListbyField')->name('staff.receipt.listbyfield.get');
        Route::get('/view/{receipt_id}', 'ReceiptsController@getView')->name('staff.receipt.view.get');
        Route::get('/print/{receipt_id}', 'ReceiptsController@getPrint')->name('staff.receipt.print.get');
        Route::get('/add/{client_id}', 'ReceiptsController@getAdd')->name('staff.receipt.add.get');
        Route::post('/add', 'ReceiptsController@postAdd')->name('staff.receipt.add.post');
    });

    Route::group(['prefix' => 'payments'], function ()
    {
        Route::get('/', 'PaymentsController@getList')->name('staff.payment.list.get');
        Route::get('/add/{client_id}', 'PaymentsController@getAdd')->name('staff.payment.add.get');
        Route::post('/add', 'PaymentsController@postAdd')->name('staff.payment.add.post');
        Route::get('/view/{payment_id}', 'PaymentsController@getView')->name('staff.payment.view.get');
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
        Route::get('/add/useold/{ticket_id}', 'TicketsController@getUseOld')->name('staff.ticket.useold.get');
        Route::get('/view/{ticket_id}/status/{status_id}/{price?}', 'TicketsController@getChangeStatus')->name('staff.ticket.changestatus.get');
    });
    
    Route::group(['prefix' => 'ticketlogs'], function() 
    {
        Route::get('/', 'TicketLogsController@getList')->name('staff.ticketlog.list.get');
        Route::post('/add', 'TicketLogsController@postAdd')->name('staff.ticketlog.add.post');
        Route::get('/{ticketlog_id}/setpublic', 'TicketLogsController@getSetpublic')->name('staff.ticketlog.setpublic.get');
    });
    
    Route::group(['prefix' => 'courses'], function ()
    {
        Route::get('/', 'CoursesController@getList')->name('staff.course.list.get');
        Route::get('/view/{course_id}', 'CoursesController@getView')->name('staff.course.view.get');
        Route::get('/export/phone/{course_id}', 'CoursesController@getExportPhone')->name('staff.course.exportphone.get');
        Route::get('/export/excel/{course_id}', 'CoursesController@getExportExcel')->name('staff.course.exportexcel.get');
        Route::get('/add', 'CoursesController@getAdd')->name('staff.course.add.get');
        Route::post('/add', 'CoursesController@postAdd')->name('staff.course.add.post');
        Route::get('/edit/{course_id}', 'CoursesController@getEdit')->name('staff.course.edit.get');
        Route::post('/edit', 'CoursesController@postEdit')->name('staff.course.edit.post');
        Route::get('/log', 'CoursesController@getLogList')->name('staff.courselog.list.get');
    });

    Route::group(['prefix' => 'coursestudents'], function ()
    {
        Route::get('/add/{client_id}', 'CourseStudentsController@getAdd')->name('staff.coursestudent.add.get');
        Route::post('/add', 'CourseStudentsController@postAdd')->name('staff.coursestudent.add.post');
        Route::get('/add/{client_id}/toclass/{class_id}', 'CourseStudentsController@getAddnow')->name('staff.coursestudent.addnow.get');
        Route::get('/edit/{coursestudent_id}', 'CourseStudentsController@getEdit')->name('staff.coursestudent.edit.get');
        Route::post('/edit', 'CourseStudentsController@postEdit')->name('staff.coursestudent.edit.post');
        Route::get('/delete/{coursestudent_id}', 'CourseStudentsController@getDelete')->name('staff.coursestudent.delete.get');  
    });

    Route::group(['prefix' => 'profile'], function ()
    {
        Route::get('/edit', 'ProfileController@getEdit')->name('staff.profile.edit.get');
        Route::post('/edit', 'ProfileController@postEdit')->name('staff.profile.edit.post');
    });
    
    Route::group(['prefix' => 'download'], function ()
    {
        Route::get('/', 'DownloadController@getList')->name('staff.download.list.get');
        Route::get('/add', 'DownloadController@getAdd')->name('staff.download.add.get');
        Route::post('/add', 'DownloadController@postAdd')->name('staff.download.add.post');
        Route::get('/delete/{download_id}', 'DownloadController@getDelete')->name('staff.download.delete.get');
        Route::get('/edit/{download_id}', 'DownloadController@getEdit')->name('staff.download.edit.get');
        Route::post('/edit', 'DownloadController@postEdit')->name('staff.download.edit.post');
    });
});