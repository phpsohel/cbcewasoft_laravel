<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ContainerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return redirect('/login');
// });
Route::get('/', function () {
    return redirect('/login');
});
//Admin
Route::middleware(['auth'])->group(function () {
    Route::controller(MemberController::class)->group(function(){
        Route::get('member/index', 'index')->name('member.index');
        Route::post('member/store', 'store')->name('member.store');
        Route::get('member/show/{id}', 'show')->name('member.show');
        Route::get('member/edit/{id}', 'edit')->name('member.edit');
        Route::post('member/update/{id}', 'update')->name('member.update');
        Route::get('member/delete/{id}', 'destroy')->name('member.delete');
        Route::get('member/report', 'report')->name('member.report');
        Route::get('member/report', 'report')->name('member.report');
        Route::get('search/member/report', 'Ajaxreport')->name('member.search.report');
    });

    Route::controller(AdminController::class)->group(function()
        {
        Route::get('admin/dashboard', 'index')->name('admin.dashboard');
        Route::get('admin/profile', 'profile')->name('admin.profile');
        Route::get('admin/password-change', 'PasswordChange')->name('admin.password-change');
        Route::post('admin/store/password-change', 'StorePasswordChange')->name('admin.store.password-change');
        Route::get('admin/logout', 'Logout')->name('admin.logout');
        //Customer
        Route::get('admin/all-customer', 'AllCustomer')->name('admin.all-customer');
        Route::get('admin/add-customer', 'Add_customer')->name('admin.add-customer');
        Route::post('admin/store/add-customer', 'Store')->name('admin.store.add-customer');
        Route::get('admin/edit-customer/{id}', 'Edit')->name('admin.edit-customer');
        Route::post('admin/update-customer/{id}', 'Update')->name('admin.update-customer');
        Route::get('admin/status-customer/{id}', 'Status')->name('admin.status-customer');
        Route::get('admin/delete-customer/{id}', 'Delete')->name('admin.delete-customer');
        Route::get('admin/view-customer/{id}', 'View_Customer')->name('admin.view-customer');
        Route::get('admin/view-customer/pdf-generate/{id}', 'Generate')->name('generate-pdf.generate');

        // Add Domain & Hosting
        Route::get('admin/all-domain/', 'All_domain')->name('admin.all-domain');
        Route::get('admin/add-domain', 'Add_domain')->name('admin.add-domain');
        Route::post('admin/add-domain', 'StoreAdmin')->name('admin.store.add-domain');
        Route::get('admin/edit-domain/{id}', 'Edit_Domain')->name('admin.edit-domain');
        Route::post('admin/update-domain/{id}', 'Update_Domain')->name('admin.update-domain');
        Route::get('admin/delete-domain/{id}', 'Delete_Domain')->name('admin.delete-domain');
        Route::get('admin/view-domain/{id}', 'View_Domain')->name('admin.view-domain');
        Route::get('admin/view-domain/pdf/{id}', 'DomainPdf')->name('domain.pdf');

        // Expire Domain & Hosting
         Route::get('admin/all-expire', 'Expire')->name('admin.all-expire');
         Route::post('admin/all-expire/search', 'ExpireSearch')->name('admin.all-expire.search');
        }
    );
    //Continer

    Route::controller(ContainerController::class)->group(function()
        {
            Route::get('admin/container/index', 'index')->name('admin.container.index');
            Route::get('admin/container/create', 'create')->name('admin.container.create');
            Route::post('admin/container/store', 'store')->name('admin.container.store');
            Route::get('admin/container/edit/{id}', 'edit')->name('admin.container.edit');
            Route::post('admin/container/update/{id}', 'update')->name('admin.container.update');
            Route::get('admin/container/destroy/{id}', 'destroy')->name('admin.container.destroy');
            Route::get('admin/container/show/{id}', 'show')->name('admin.container.show');
        }
    );

  });

Route::controller(AdminController::class)->group(function()
    {
       Route::get('/search', 'search')->name('admin.search');
       Route::get('/search/get-bl-number', 'getBLNumber')->name('admin.getblnumber');
    }
);


Route::get('tables', function(){
    return view('admin.data-table');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';