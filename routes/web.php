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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contents' , [\App\Http\Controllers\ContentsController::class , 'index'])->name('contents')->middleware('auth');
Route::get('/content/{id}' , [\App\Http\Controllers\ContentsController::class , 'oneContent'])->name('one-content')->middleware('auth');
Route::get('/admin' , [\App\Http\Controllers\AdminController::class , 'index'])->name('admin')->middleware('auth');
Route::get('/adminEditContent/{id}' , [\App\Http\Controllers\AdminController::class , 'editAdmin'])->name('edit-admin')->middleware('auth');
Route::get('/adminDelContent/{id}' , [\App\Http\Controllers\AdminController::class , 'delAdmin'])->name('del-admin')->middleware('auth');
Route::post('/adminEditContent' , [\App\Http\Controllers\AdminController::class , 'editAdminPost'])->name('del-admin-post')->middleware('auth');
Route::post('/adminAddContent' , [\App\Http\Controllers\AdminController::class , 'addContent'])->name('addContent')->middleware('auth');
Route::post('/profileChangePassword' , [\App\Http\Controllers\HomeController::class , 'changePassword'])->name('profile-change-password')->middleware('auth');
