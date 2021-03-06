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

    $this->get('/portfolio' , 'PortfolioController@index')->name('main-portfolio-index');

    $this->get('/portfolio/{portfolio}' , 'PortfolioController@show')->name('main-portfolio-show');

    $this->get('/portfolio/category/{id}' , 'PortfolioController@showSubcategories')->name('show-sub');

    $this->get('/portfolio/subcategory/{id}' , 'PortfolioController@showPortfolios')->name('show-portfolios');

    $this->get('/order' , 'HomeController@orderIndex')->name('order-index');

    $this->get('/posts' , 'HomeController@posts')->name('news-index');

    $this->get('/post/{post}' , 'HomeController@showSinglePost')->name('show-single-post');

    $this->get('/contact-us' , 'HomeController@contactUs')->name('contact-us-index');

    $this->get('/comingsoon' , 'HomeController@comingSoon')->name('coming-soon');

    $this->post('/contact-us' , 'ContactController@store')->name('contact-us-store');


});

Route::group([ 'middleware' => 'auth:web' ] , function(){

    $this->post('/payment' , 'HomeController@payment')->name('payment');

    $this->get('/orders' , 'HomeController@userOrders')->name('user-orders');

    $this->get('/payment/checker' , 'HomeController@checker')->name('payment-checker');

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
Route::group([ 'prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => 'checkAdmin' ] , function(){

    $this->get('/' , function () {

        return view('admin.master.index');

    })->name('admin-index');

    $this->resource('slider' , 'SliderController');

    $this->resource('slogan' , 'SloganController');

    $this->resource('portfolio' , 'PortfolioController');

    $this->resource('category' , 'CategoryController');

    $this->resource('subcategory' , 'SubcategoryController');

    $this->resource('information' , 'InformationController');

    $this->resource('quote' , 'QuoteController');

    $this->resource('about-us-history' , 'AboutUsHistoryController');

    $this->resource('medal' , 'MedalController');

    $this->resource('post' , 'PostController');

    $this->resource('user' , 'UserController');

    $this->get('/panel' , 'UserController@profile')->name('profile');

    $this->post('/panel/change' , 'UserController@changeProfile')->name('change-profile');

    $this->get('/panel/changepassview' , 'UserController@changePasswordView')->name('change-profile-password-view');

    $this->post('/panel/changepassword' , 'UserController@changePassword')->name('change-profile-password');

    $this->resource('payment' , 'PaymentController');

    $this->get('/payments/successful' , 'PaymentController@successful')->name('payment-successful');

    $this->get('/payments/unsuccessful' , 'PaymentController@unsuccessful')->name('payment-unsuccessful');

    $this->get('/payments/printed' , 'PaymentController@printed')->name('payment-printed');

    $this->resource('product' , 'ProductController');

    $this->resource('contact' , 'ContactController');

    $this->post('upload-image' , 'UploadController@uploadImageSubject');
});


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
