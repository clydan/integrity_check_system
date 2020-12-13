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
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/schools', 'InstitutionsController');
    Route::resource('/students', 'StudentsController');
    Route::get('/your-students', 'UtilitiesController@usersStudents')->name('yourstudent');
});