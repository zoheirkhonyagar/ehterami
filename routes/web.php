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

//index routes
Route::group([''] , function () {
        
    $this->get('/', 'HomeController@index')->name('main-index');

    $this->get('/about-us' , function () { return 'about-us'; })->name('about-us-index');

    $this->get('/portfolio' , function () { return 'portfolio'; })->name('portfolio-index');
    
    $this->get('/order' , function () { return 'order'; })->name('order-index');

    $this->get('/news' , function () { return 'news'; })->name('news-index');

    $this->get('/contact-us' , function () { return 'contact-us'; })->name('contact-us-index');

});

//upload routes
Route::prefix('upload')->namespace('Modules')->group(function () {
    Route::get('/uploadform' , function () {
        return view('admin.upload.index');
    });
    Route::post('request', 'UploadController@uploadImage')->name('single-upload-image');
    Route::post('request', 'UploadController@multiUpload')->name('multi-upload-image');
});

//admin routes
Route::prefix('admin')->namespace('Admin')->group(function () {
    
    $this->get('/' , function () {
        return view('admin.master.index');
    })->name('admin-index');

    //index page routes
    $this->resource('slider' , 'SliderController');


});