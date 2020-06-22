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


Route::get('about', function () {

    return view('front.about');
});

Route::get('get-started', function () {

    return view('front.get_started');
});

Route::get('tour', function () {

    return view('front.tour');
});

Route::get('contact', function () {

    return view('front.contact_us');
});

Route::get('login-form', function () {

    return view('login_form');
});

Route::get('register-form', function () {

    return view('register_form');
});

// Route::get('admin', function () {

//     return view('dashboard');
// });
//basic admin route for now
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('admin');

    Route::get('users', function () {
        return view('admin.users');
    })->name('users');

    // Route::get('/profile/cards', function () {
    //     return view('admin.profile.profile_cards');
    // });


    Route::get('/deposit', function () {
        return view('admin.deposit.deposit');
        
    });

    Route::get('withdrawals', function () {
        return view('admin.withdrawals');
    })->name('withdrawals');

    Route::get('deposits', function () {
        return view('admin.deposits');
    })->name('deposits');
    Route::get('trades', function () {
        return view('admin.trades');
    })->name('trades');

    Route::get('tickets', function () {
        return view('admin.tickets');
    })->name('tickets');
     Route::get('profile', function () {
        return view('admin.profile');
    })->name('tickets');
});

//users Route
Route::get('users', function () {

    return view('users.users_home');
});

Route::get('users/profile', function () {

    return view('users.users_profile');
});

Route::get('users/trade', function () {
    return view('users.chart.trade_chart');
    
});

Route::get('users/deposit', function () {
    return view('users.deposit.users_deposit');
    
});

Route::get('users/withdraw', function () {
    return view('users.withdraw.users_withdraw');
    
});

Route::get('users/add-account', function(){

    return view('users.accounts.bank_account');

});