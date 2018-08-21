<?php

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
    return view('marketingPlan.pages.landingPage');
});

Route::get('newmember', function () {
    return view('marketingPlan.pages.newmember');
});

Route::get('dashboard', function () {
    return view('admin.index');
});

Route::get('user', function () {
    return view('user.index');
});

Route::get('useraccounts', function () {
    return view('user.pages.accounts');
});

Route::get('waysofearning', function () {
    return view('user.pages.waysofearning');
});

Route::get('firstwoe', function () {
    return view('user.pages.firstwoe');
});

Route::get('firstwoehw', function () {
    return view('user.pages.firstwoehw');
});


Route::get('secondwoe', function () {
    return view('user.pages.secondwoe');
});

Route::get('secondwoehw', function () {
    return view('user.pages.secondwoehw');
});


Route::get('thirdwoe', function () {
    return view('user.pages.thirdwoe');
});

Route::get('thirdwoehw', function () {
    return view('user.pages.thirdwoehw');
});

Route::get('fourthwoe', function () {
    return view('user.pages.fourthwoe');
});

Route::get('fourthwoehw', function () {
    return view('user.pages.fourthwoehw');
});


Route::get('fivewoe', function () {
    return view('user.pages.fivewoe');
});

Route::get('fivewoehw', function () {
    return view('user.pages.fivewoehw');
});

Route::get('companyinfo', function () {
    return view('user.pages.companyinfo');
});

Route::get('changeuseraccount', function () {
    return view('user.pages.changeuseraccount');
});

Route::get('orderhistory', function () {
    return view('user.pages.orderhistory');
});


Route::get('account', function () {
    return view('admin.pages.newmember');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
