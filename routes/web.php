<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form', [App\Http\Controllers\EmployeeController::class, 'employeeForm'])->name('employee.form');
Route::post('/form', [App\Http\Controllers\EmployeeController::class, 'storeEmployeeData'])->name('store.employee.data');
Route::get('/table', [App\Http\Controllers\EmployeeController::class, 'employeeTable'])->name('employee.table');
Route::get('/update/{id}', [App\Http\Controllers\EmployeeController::class, 'updateEmployeeData'])->name('update.employee.data');
Route::post('/update/{id}', [App\Http\Controllers\EmployeeController::class, 'storeUpdatedEmployeeData'])->name('store.updated.employee.data');
Route::get('/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'deleteEmployee'])->name('delete.employee');
