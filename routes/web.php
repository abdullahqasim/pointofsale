<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskFileController;

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
Route::get('/file-import',[TaskFileController::class,'importView'])->name('import-view');
Route::post('/import',[TaskFileController::class,'import'])->name('import');
Route::get('/export-users',[TaskFileController::class,'exportUsers'])->name('export');
Route::get('/listing-taskfile',[TaskFileController::class,'listing'])->name('taskfile_listing');
Route::get('/show-taskfile/{id}',[TaskFileController::class,'show'])->name('taskfile.show');


