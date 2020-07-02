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

Route::middleware('web')->group(function () {
    Route::get('getmodal/{type}', 'SupportController@getmodal');
    Route::get('add-element/{type}', 'SupportController@addElement');
});

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login-form', function () {

    return view('login_form');
});


// Route::get('admin', function () {

//     return view('dashboard');
// });
//basic admin route for now
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('index');

    Route::get('users', function () {
        return view('back.admin.users');
    })->name('users');

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/', 'SettingsController@index')->name('index');
        Route::post('add-currency', 'SettingsController@addCurrency')->name('add.currency');
        Route::post('update-currency/{id}', 'SettingsController@updateCurrency')->name('update.currency');
        Route::get('remove-currency/{id}', 'SettingsController@removeCurrency')->name('remove.currency');

        Route::post('add-plan', 'SettingsController@addPlan')->name('add.plan');
        Route::post('update-plan/{id}', 'SettingsController@updatePlan')->name('update.plan');
        Route::get('remove-plan-feature', 'SettingsController@removePlan')->name('remove.plan');
        Route::get('remove-plan-feature/{id}', 'SettingsController@removePlanFeature')->name('remove.plan.feature');
    });
    Route::get('/deposit', function () {
        return view('admin.deposit.deposit');
    });

    Route::get('withdrawals', function () {
        return view('back.admin.withdrawals');
    })->name('withdrawals');

    Route::get('deposits', function () {
        return view('back.admin.deposits');
    })->name('deposits');
    Route::get('trades', 'AdminController@trades')->name('trades');

    Route::get('profile', function () {
        return view('back.profile.profile');
    })->name('tickets');
});

//users Route   
Route::group(['prefix'=>'users', 'as'=> 'users.'], function() {
    Route::get('/', 'UserController@index')->name('index');
    Route::get('deposit', 'UserController@deposit')->name('deposit');
    Route::get('withdrawal','UserController@withdrawal')->name('withdrawal');
    Route::get('transactions','UserController@transactions')->name('transactions');
    Route::get('trades','UserController@trade')->name('trades');
    Route::post('trades/place','TradeController@placeTrade')->name('trades.place');
    Route::get('profile','UserController@profile')->name('profile');
});
// Route::get('users', function () {

//     return view('users.users_home');
// });

// Route::get('users/profile', function () {

//     return view('users.users_profile');
// });

// Route::get('users/trade', function () {
//     return view('users.chart.trade_chart');
// });

// // Route::get('users/deposit', function () {
// //     return view('users.deposit.users_deposit');
// // });

// Route::get('users/withdraw', function () {
//     return view('users.withdraw.users_withdraw');
// });

// Route::get('users/add-account', function () {

//     return view('users.accounts.bank_account');
// });

// Route::get('users/request-loan', function () {

//     return view('users.loans.request_loan');
// });

// Route::get('users/support', function () {

//     return view('users.support.request_support');
// });

Route::get('terms-and-condition', function () {
    return view('terms_and_condition');
    
});
Route::get('privacy-and-policy', function () {
    return view('privacy_and_policy');
    
});