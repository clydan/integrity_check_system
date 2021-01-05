<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('super-admin')->name('super-admin.')->middleware('can:super-admin-ability')->group(function(){
    Route::resource('/users', 'Admin\UserController');
    Route::post('/password/{user}', 'Admin\UserController@updatePassword')->name('update-password');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/schools', 'InstitutionsController');
    Route::resource('/students', 'StudentsController');
    Route::resource('/reports', 'ReportsController');
    Route::get('/your-students', 'UtilitiesController@usersStudents')->name('yourstudent');
    Route::get('/your-students/create/{id}', 'UtilitiesController@createReport')->name('yourstudent-create-report');
    Route::get('/school-students/{id}', 'UtilitiesController@schoolsStudents')->name('schools-students');
    Route::get('/view-report/{id}', 'UtilitiesController@showReport')->name('show-report');
    Route::get('/reports-verification', 'UtilitiesController@unconfirmedReports')->name('confirm');
    Route::put('/reports-verifiction/{id}', 'UtilitiesController@confirmVerification')->name('verified');
});