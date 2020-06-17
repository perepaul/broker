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
    return view('main');
});

Auth::routes();

// Route::get('index', function(){

//     return view('main');

// });

Route::get('admin', function(){
    
    return view('dashboard');
});

Route::get('about', function(){

    return view('front.about');

});

Route::get('get-started', function(){

    return view('front.get_started');

});

Route::get('tour', function(){

    return view('front.tour');
    
});

Route::get('contact', function(){

    return view('front.contact_us');
});

Route::get('login-form', function(){

    return view('login_form');

});

Route::get('register-form', function(){

    return view('register_form');

});

Route::get('/home', 'HomeController@index')->name('home');
