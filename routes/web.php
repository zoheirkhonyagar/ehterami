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

    $this->get('/' , 'HomeController@index')->name('main-index');

    $this->get('/about-us' , 'HomeController@aboutUs')->name('about-us-index');

    $this->resource('portfolio' , 'PortfolioController');

    $this->get('/order' , function () { return 'order'; })->name('order-index');

    $this->get('/news' , 'HomeController@news')->name('news-index');

    $this->get('/contact-us' , 'HomeController@contactUs')->name('contact-us-index');

    $this->get('/comingsoon' , 'HomeController@comingSoon')->name('coming-soon');

    $this->post('/contact-us' , 'ContactController@store')->name('contact-us-store');

});

//upload routes
Route::prefix('upload')->namespace('Modules')->group(function () {
    Route::get('/uploadform' , function () {
        return view('admin.upload.index');
    });
    Route::post('request', 'UploadController@uploadImage')->name('single-upload-image');
    Route::post('request', 'UploadController@multiUpload')->name('multi-upload-image');
});


Route::group([ 'prefix' => 'admin' , 'namespace' => 'Auth' , 'middleware' => 'checkAdmin' ] , function(){
    $this->get('/' , function(){
        return "Your Admin";
    });
});



//admin routes
Route::prefix('admin')->namespace('Admin')->group(function () {

    // $this->get('/' , function () {
    //     return view('admin.master.index');
    // })->name('admin-index');

    //index page routes
    $this->resource('slider' , 'SliderController');

    $this->resource('slogan' , 'SloganController');

    $this->resource('information' , 'InformationController');

    $this->resource('quote' , 'QuoteController');

    $this->resource('about-us-history' , 'AboutUsHistoryController');

    $this->resource('medal' , 'MedalController');

    $this->resource('contact' , 'ContactController');

});

// Auth::routes();

Route::group([''] , function () {

    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');

});

Route::get('/home', 'HomeController@index')->name('home');
