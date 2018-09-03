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
    return view('admin.master.index');
});

//upload routes
Route::prefix('upload')->group(function () {
    Route::get('/uploadform' , function () {
        return view('admin.upload.index');
    });
    Route::post('request', '')->name('upload-image');
});