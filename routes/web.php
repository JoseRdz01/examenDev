<?php

use App\Http\Controllers\permissionController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('users/create', [App\Http\Controllers\userController::class, 'create']);
    Route::get('admin/company', [App\Http\Controllers\companyController::class, 'create'])->name('admin.company');
    Route::post('/admin', [App\Http\Controllers\companyController::class, 'save'])->name('admin.save');
    Route::get('admin/index', [App\Http\Controllers\companyController::class, 'index'])->name('admin.index');

    Route::get('admin/listPerm', [App\Http\Controllers\permissionController::class, 'index'])->name('admin.permisos');
    Route::post('admin/createPerm', [App\Http\Controllers\permissionController::class, 'create'])->name('admin.save');
    Route::resource('permissions', permissionController::class);
});