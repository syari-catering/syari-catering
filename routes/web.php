<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth', 'role:Admin')->name('admin.')->group(function () {

    Route::get('', 'MainController@admin')->name('main');

    // menus page
    Route::resource('menu', 'MenuController');

    // menuschedule page
    Route::resource('menuschedule', 'MenuScheduleController');

    // packets page
    Route::resource('packet', 'PacketController');

    // packets rule page
    Route::resource('packetrule', 'PacketRuleController');
});

Route::prefix('kitchen_crew')->middleware('auth', 'role:KitchenCrew')->name('kitchen_crew.')->group(function () {

    Route::get('', 'MainController@kitchen_crew')->name('main');

    // menus page
    Route::resource('menu', 'MenuController');

    // menuschedule page
    Route::resource('menuschedule', 'MenuScheduleController');

    // packets page
    Route::resource('packet', 'PacketController');

    // packets rule page
    Route::resource('packetrule', 'PacketRuleController');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detail', function () {
    return view('templates.default');
});
Route::get('/payment', function () {
    return view('templates.payment');
});
Route::get('/invoice', function () {
    return view('templates.invoice');
});
Route::get('/order', function () {
    return view('templates.order');
});
