<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;



//Auth routs
Route::group(['prefix'=>'auth'], function(){
    Route::get('login', [AuthController::class,'login'])->name('login');
    Route::post('loginPerform', [AuthController::class,'loginPerform'])->name('loginPerform');
});

Route::group(['middleware' => ['auth']], function() {

    // Logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

    // Home controller
    Route::get('/', [HomeController::class,'index'])->name('index');


    // Vacancies routs
    Route::resource('vacancies', VacancyController::class);
    // Route::group(['prefix'=>'vacancies'], function(){
    //     Route::get('/list', [VacancyController::class,'vacancylist']);
    // });



    // Vacancies routs
    Route::resource('settings', SettingController::class);
});

