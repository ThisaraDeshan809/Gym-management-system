<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use App\Http\Controllers\genaralController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\portfolioController;

Route::controller(genaralController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/redirect-dashboard', 'dashboardRedirect')->name('dashboardRedirect');
    Route::get('/setdashboard', 'setDashboard')->name('setDashboard');
    Route::get('/dashboard', 'setDashboard')->name('dashboard');
    Route::get('/set-new-password', 'setNewPass')->name('setNewPass');
    Route::post('set-new-pass', 'setNewPassword')->name('setNewPassword');
    Route::get('/user-login', 'userLogin')->name('userLogin');
});


Route::controller(portfolioController::class)->group(function () {
    Route::get('/mobile-profile', 'mobileProfile')->name('mobileProfile');
    Route::get('/view-project{id}','viewProject')->name('viewProject');
});

Route::prefix('admin')->middleware(['auth:sanctum', 'permission:Access Admin Dashboard', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(dashboardController::class)->group(function () {
        Route::get('/dashboard', 'getAdminDashboard')->name('adminDashboard');
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


Route::middleware([config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(profileController::class)->group(function () {
        Route::get('/new-profle', 'newProfile')->name('newProfile');
        Route::post('/store-profile','storeProfile')->name('storeProfile');
        Route::get('/profile-details','profileDetails')->name('profileDetails');
        Route::get('/view-profile/{id}','viewProfile')->name('viewProfile');
        Route::get('/edit-profile/{id}','editProfile')->name('editProfile');
        Route::post('/update-profile/{id}','updateProfile')->name('updateProfile');

        Route::post('/store-skill/{id}','storeSkill')->name('storeSkill');
        Route::post('/delete-skill/{id}','deleteSkill')->name('deleteSkill');

        Route::get('/download-CV/{id}','downloadCV')->name('downloadCV');
    });

    Route::controller(educationController::class)->group(function () {
        Route::get('/new-education/{id}', 'newEducation')->name('newEducation');
        Route::post('/store-education/{id}','storeEducation')->name('storeEducation');
        Route::get('/edit-education/{id}','editEducation')->name('editEducation');
        Route::post('update-education/{id}','updateEducation')->name('updateEducation');
        Route::post('/delete-education/{id}','deleteEducation')->name('deleteEducation');
    });
    
    Route::controller(experienceController::class)->group(function () {
        Route::get('/new-experience/{id}', 'newExperience')->name('newExperience');
        Route::post('/store-experience/{id}','storeExperience')->name('storeExperience');
        Route::get('/edit-experience/{id}','editExperience')->name('editExperience');
        Route::post('update-experience/{id}','updateExperience')->name('updateExperience');
        Route::post('/delete-experience/{id}','deleteExperience')->name('deleteExperience');
    });

    Route::controller(projectController::class)->group(function () {
        Route::get('/new-project/{id}', 'newProject')->name('newProject');
        Route::post('/store-project/{id}','storeProject')->name('storeProject');
        Route::get('/edit-project/{id}','editProject')->name('editProject');
        Route::post('/update-project/{id}','updateProject')->name('updateProject');
        Route::post('/delete-project/{id}','deleteProject')->name('deleteProject');


        Route::get('/add-sub-image/{id}','addSubImage')->name('addSubImage');
        Route::post('/store-sub-image/{id}','storeSubImage')->name('storeSubImage');
        Route::get('/view-sub-image/{id}','viewSubImage')->name('viewSubImage');
        Route::post('/delete-sub-image/{id}','deleteSubImage')->name('deleteSubImage');
    });

});