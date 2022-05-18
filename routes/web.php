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
Route::get('/delete-record/{deleteid}', [App\Http\Controllers\HomeController::class, 'deleteEmployee'])->name('delete-record');
Route::get('/create-empdata', [App\Http\Controllers\HomeController::class, 'createEmployee'])->name('create-empdata');
 // []is array 
Route::post('/employee-save', [App\Http\Controllers\HomeController::class, 'employeeSave'])->name('employeesave');
Route::get('/edit-record/{editId}',[App\Http\Controllers\HomeController::class, 'editRecord'])->name('edit-record');
Route::post('/update-record',[App\Http\Controllers\HomeController::class, 'employeeUpdate'])->name('updaterecord');
