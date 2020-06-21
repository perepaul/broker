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

Route::get('/home', 'HomeController@index')->name('home');


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

Route::get('admin', function(){
    
    return view('dashboard');
});
//basic admin route for now
Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/profile', function () {
        return view('admin.profile.profile');
    });

    Route::get('/profile/cards', function () {
        return view('admin.profile.profile_cards');
        
    });

    Route::get('/profile/list', function () {
        return view('admin.profile.profile_list');
        
    });

    Route::get('/trade', function () {
        return view('admin.trade.trade_chart');
        
    });

    Route::get('/deposit', function () {
        return view('admin.deposit.deposit');
        
    });


});

Route::get('users', function () {

    return view('users.users_home');
    
});