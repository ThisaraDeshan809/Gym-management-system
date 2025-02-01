<?php

use App\Http\Controllers\attendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\roleController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\userController;
use App\Http\Controllers\genaralController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\packagesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\equipmentController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\trainerController;

Route::controller(genaralController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/redirect-dashboard', 'dashboardRedirect')->name('dashboardRedirect');
    Route::get('/setdashboard', 'setDashboard')->name('setDashboard');
    Route::get('/dashboard', 'setDashboard')->name('dashboard');
    Route::get('/set-new-password', 'setNewPass')->name('setNewPass');
    Route::post('set-new-pass', 'setNewPassword')->name('setNewPassword');
    Route::get('/user-login', 'userLogin')->name('userLogin');
    Route::post('/login-user','loginUser')->name('loginUser');
    Route::get('/user-register','userRegister')->name('userRegister');
    Route::post('/register-User','registerUser')->name('registerUser');
});

Route::prefix('admin')->middleware(['auth:sanctum', 'permission:Access Admin Dashboard', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::controller(dashboardController::class)->group(function () {
        Route::get('/dashboard', 'getAdminDashboard')->name('adminDashboard');
    });
});

Route::prefix('User')->middleware(['auth:sanctum', 'permission:Access User Dashboard', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(dashboardController::class)->group(function () {
        Route::get('/user-dashboard', 'getUserDashboard')->name('userDashboard');
    });

    Route::controller(siteController::class)->group(function () {
        Route::get('/about-us', 'aboutUs')->name('aboutUs');
        Route::get('/our-team','ourTeam')->name('ourTeam');
        Route::get('/contact-us','contactUs')->name('contactUs');
        Route::get('/pricing','pricing')->name('pricing');
        Route::get('/checkout/{id}','checkout')->name('checkout');
    });

    Route::controller(trainerController::class)->group(function () {
        Route::post('/reserve-trainer', 'storeReserve')->name('trainer.reserve');
    });

    Route::controller(equipmentController::class)->group(function () {
        Route::get('/our_eqipments','user_equipments_page')->name('user_equipments_page');
        Route::post('/reserve_equipment','add_equipment_reservation')->name('add_equipment_reservation');
    });

    Route::controller(reservationController::class)->group(function () {
        Route::get('/user-my-reservations', 'my_reseravtions_page')->name('my_reseravtions_page');
    });

    Route::controller(paymentController::class)->group(function () {
        Route::post('/save_package_payment', 'savePackagePayment')->name('savePackagePayment');
    });
});


Route::middleware(['permission:Manage Users', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(userController::class)->group(function () {
        Route::get('/new-user', 'getNewUser')->name('newUser');
        Route::get('/system-users', 'sysUsers')->name('sysUsers');
        Route::get('/show-password/{id}/{tempPass}', 'showPass')->name('showPass');
        Route::get('/get-user-update/{id}', 'getUpdateUser')->name('getUpdateUser');
        Route::post('update-user{id}', 'updateUser')->name('updateUser');
        Route::post('updateUserPassword/{id}', 'updateUserPassword')->name('updateUserPassword');
        Route::post('/delete-user/{id}', 'deleteUser')->name('deleteUser');
        Route::post('/store-new-user', 'storeUser')->name('storeUser');
        Route::post('/delete-user/{id}', 'deleteUser')->name('deleteUser');
    });

    Route::controller(roleController::class)->group(function () {
        Route::get('/role-management', 'roleManagement')->name('roleManagement');
        Route::post('/store-role', 'storeRole')->name('storeRole');
        Route::post('/delete-role/{id}', 'deleteRole')->name('deleteRole');
        Route::get('/view-role/{id}', 'viewRole')->name('viewRole');
    });

});

Route::middleware(['permission:Manage Employees', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(employeeController::class)->group(function () {
        Route::get('/new-employee', 'newEmployee')->name('newEmployee');
        Route::post('/store-employee','storeEmployee')->name('storeEmployee');
        Route::post('/update-employee/{id}','updateEmployee')->name('updateEmployee');
        Route::post('/delete-employee/{id}','deleteEmployee')->name('deleteEmployee');
    });

});

Route::middleware([config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(packagesController::class)->group(function () {
        Route::get('/all-Packages', 'allPackages')->name('allPackages');
        Route::post('/store-package','storePackage')->name('storePackage');
        Route::post('/update-package/{id}','updatePackage')->name('updatePackage');
        Route::post('/delete-package/{id}','deletePackage')->name('deletePackage');
    });

    Route::controller(attendanceController::class)->group(function () {
        Route::get('/all-attendances', 'attendance_page')->name('attendance_page');
        Route::post('/save-attendance', 'saveAttendance')->name('saveAttendance');
    });

    Route::controller(paymentController::class)->group(function () {
        Route::get('/all-payments', 'payment_page')->name('payment_page');
        Route::post('/save-Payment', 'savePayment')->name('savePayment');
        Route::get('/get_all_payments_datatable', 'get_all_payments_datatable')->name('get_all_payments_datatable');
        Route::post('/mark_as_paid_payment','mark_as_paid_payment')->name('mark_as_paid_payment');
    });

    Route::controller(trainerController::class)->group(function () {
        Route::get('/get_trainer_reservations', 'get_trainer_reservations')->name('get_trainer_reservations');
        Route::get('/trainer_reservations_page', 'trainer_reservations_page')->name('trainer_reservations_page');
        Route::post('/trainer_reservation_mark_as_complete', 'mark_as_complete')->name('mark_as_complete');
        Route::post('/trainer_reservation_cancel', 'cancel_trainer_reservation')->name('trainer_reservation_cancel');
    });

    Route::controller(equipmentController::class)->group(function () {
        Route::get('/equipments','admin_equipments_page');
        Route::get('/get_equipments','get_equipments')->name('get_equipments');
        Route::post('/add_new_equipment','add_new_equipment')->name('add_new_equipment');
        Route::get('/admin_equipment_reservations_page','admin_equipment_reservations_page')->name('admin_equipment_reservations_page');
        Route::get('/admin_get_equipment_reservations','get_equipment_reservations')->name('get_equipment_reservations');
        Route::post('/equipment_reservation_mark_as_complete','equipment_reservation_mark_as_complete')->name('equipment_reservation_mark_as_complete');
        Route::post('/equipment_reservation_cancel','equipment_reservation_cancel')->name('equipment_reservation_cancel');
    });
});
