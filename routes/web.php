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
Route::get('dashboard/{id}', 'UserDashboardController@summary');
Route::get('', function () {
    return view('ecommerce.pages.home');
});
Route::resource('dashboard','DashboardController');

Route::resource('/home','EcommerceController');

//crud
Route::get('members', 'ManagePayoutController@index');
Route::get('member', 'MemberController@index');
Route::post('users/{id}', 'ManagePayoutController@show');
Route::post('updateusers/{id}', 'ManagePayoutController@update');


Route::get('managepayout', 'ManagePayoutController@index');
Route::post('members/display', 'MemberController@display');
Route::post('members/get/{id}', 'MemberController@get');
Route::post('members/edit', 'MemberController@edit');
Route::post('members/add', 'MemberController@add');

Route::get('codes', 'CodeController@index');
Route::post('codes/add', 'CodeController@add');

Route::get('ecommercehome', function () {
    return view('ecommerce.pages.home');
});

Route::get('ecommercelogin', function () {
    return view('ecommerce.login');
});

Route::get('ecommerceaboutus', function () {
    return view('ecommerce.pages.aboutus');
});

Route::get('undermaintenance', function () {
    return view('ecommerce.partial.maintenance');
});

Route::get('ecommercecontact', function () {
    return view('ecommerce.pages.contact');
});

Route::get('ecommerceproducts', function () {
    return view('ecommerce.pages.products');
});

Route::get('newmember', function () {
    return view('marketingPlan.pages.newmember');
});


Route::get('statistics', function () {
    return view('admin.pages.statistics');
});

Route::get('generalsettings', function () {
    return view('admin.pages.generalsettings');
});

Route::get('products', function () {
    return view('admin.pages.products.products');
});

Route::get('addproduct', function () {
    return view('admin.pages.products.addproduct');
});
Route::resource('products', 'ProductController');

Route::get('sales', function () {
    return view('admin.pages.mainsales');
});

Route::get('catalog', function () {
    return view('admin.pages.catalog');
});

Route::get('addcategory', function () {
    return view('admin.pages.categories.addcategory');
});

Route::get('categories', function () {
    return view('admin.pages.categories.categories');
});

Route::get('adddistributor', function () {
    return view('admin.pages.distributors.adddistributor');
});

Route::get('distributors', function () {
    return view('admin.pages.distributors.distributors');
});


Route::get('addreview', function () {
    return view('admin.pages.reviews.addreview');
});

Route::get('reviews', function () {
    return view('admin.pages.reviews.reviews');
});

Route::get('addorder', function () {
    return view('admin.pages.orders.addorder');
});

Route::get('orders', function () {
    return view('admin.pages.orders.orders');
});


Route::get('addvoucher', function () {
    return view('admin.pages.vouchers.addvoucher');
});

Route::get('vouchers', function () {
    return view('admin.pages.vouchers.vouchers');
});

Route::get('useraccounts', 'MemberController@view');

Route::get('waysofearning', function () {
    return view('admin.pages.waysofearning');
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


Route::get('fifthwoe', function () {
    return view('user.pages.fifthwoe');
});

Route::get('fifthwoehw', function () {
    return view('user.pages.fifthwoehw');
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

Route::get('incomesales', function () {
    return view('admin.pages.incomesales');
});

Route::get('rmsales', function () {
    return view('admin.pages.rmsales');
});

Route::get('money', function () {
    return view('admin.pages.money');
});

Route::get('topearners', function () {
    return view('admin.pages.topearners');
});

Route::get('adminaccount', function () {
    return view('admin.pages.adminaccount');
});


Auth::routes();


Route::post('/home', [
    'uses' => 'LoginController@login',
    'as'   => 'home.index'
]);


Route::group(['middleware' => 'auth'], function(){
    Route::get('home.index', function () {
        return view('home.index');
    });

    Route::get('dashboard.index', function(){
        return view('dashboard.index');
    })->name('dashboard');

});