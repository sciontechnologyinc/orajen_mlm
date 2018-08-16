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


Route::get('account', function () {
    return view('marketingPlan.pages.account');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
