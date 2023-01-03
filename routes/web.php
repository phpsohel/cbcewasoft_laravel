<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ContainerController;
use App\Http\Controllers\Admin\GeneralSettingController;

// All Route
// =========================
Route::get('/clear', function() {
    Artisan::call('cache:clear');
        dd("All Cache Clear ");
});

// Login
// ===============
Route::get('/', function () {
    return redirect('/register-form');
});
//Register Form
// ==================
Route::controller(AdminController::class)->group(function()
{
    Route::get('/register-form', 'register_form')->name('register_form');
    Route::post('/register-form', 'store_register_form')->name('register_form.store');
});

//Admin
// ============================
Route::middleware(['auth'])->group(function () {
    Route::controller(MemberController::class)->group(function(){
        Route::get('member/index', 'index')->name('member.index');
        Route::post('member/store', 'store')->name('member.store');
        Route::get('member/show/{id}', 'show')->name('member.show');
        Route::get('member/edit/{id}', 'edit')->name('member.edit');
        Route::post('member/update/{id}', 'update')->name('member.update');
        Route::get('member/delete/{id}', 'destroy')->name('member.delete');

        Route::get('member/request_list', 'request_list')->name('member.request_list');
        Route::get('member/reject_list', 'reject_list')->name('member.reject_list');
        
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
        //Customer Route
        Route::get('admin/all-customer', 'AllCustomer')->name('admin.all-customer');
        Route::get('admin/add-customer', 'Add_customer')->name('admin.add-customer');
        Route::post('admin/store/add-customer', 'Store')->name('admin.store.add-customer');
        Route::get('admin/edit-customer/{id}', 'Edit')->name('admin.edit-customer');
        Route::post('admin/update-customer/{id}', 'Update')->name('admin.update-customer');
        Route::get('admin/status-customer/{id}', 'Status')->name('admin.status-customer');
        Route::get('admin/delete-customer/{id}', 'Delete')->name('admin.delete-customer');
        Route::get('admin/view-customer/{id}', 'View_Customer')->name('admin.view-customer');
        Route::get('admin/view-customer/pdf-generate/{id}', 'Generate')->name('generate-pdf.generate');

        // Add Domain & Hosting Route
        Route::get('admin/all-domain/', 'All_domain')->name('admin.all-domain');
        Route::get('admin/add-domain', 'Add_domain')->name('admin.add-domain');
        Route::post('admin/add-domain', 'StoreAdmin')->name('admin.store.add-domain');
        Route::get('admin/edit-domain/{id}', 'Edit_Domain')->name('admin.edit-domain');
        Route::post('admin/update-domain/{id}', 'Update_Domain')->name('admin.update-domain');
        Route::get('admin/delete-domain/{id}', 'Delete_Domain')->name('admin.delete-domain');
        Route::get('admin/view-domain/{id}', 'View_Domain')->name('admin.view-domain');
        Route::get('admin/view-domain/pdf/{id}', 'DomainPdf')->name('domain.pdf');

        // Expire Domain & Hosting Route
         Route::get('admin/all-expire', 'Expire')->name('admin.all-expire');
         Route::post('admin/all-expire/search', 'ExpireSearch')->name('admin.all-expire.search');
        }
    );
    //User Route
    Route::controller(UserController::class)->group(function()
        {
            Route::get('user', 'index')->name('user');
            Route::post('user/store', 'store')->name('user.store');
            Route::post('user/update/{id}', 'update')->name('user.update');
            Route::get('user/delete/{id}', 'destroy')->name('user.destroy');
        }
    );
    //Container Route
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
    //Role Route
    Route::controller(RoleController::class)->group(function(){
            Route::get('role/index', 'index')->name('role.index');
            Route::post('role/store', 'store')->name('role.store');
            Route::post('role/update/{id}', 'roleupdate')->name('role.roleupdate');
            Route::get('role/delete/{id}', 'destroy')->name('role.destroy');
            Route::get('role/permission/{id}', 'permission')->name('role.permission');
            Route::post('role/permission-store/{id}', 'permissionUpdate')->name('role.permission-store');
    });
    //General Setting Route
    Route::controller(GeneralSettingController::class)->group(function(){
            Route::get('setting/index', 'index')->name('setting.index');
            Route::post('setting/store', 'store')->name('setting.store');
            Route::post('setting/update/{id}', 'update')->name('setting.update');
    });

});

//Search 
// =================
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