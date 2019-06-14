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

 
Route::get('/admin', function () {
    return view('admin/main');
});
Route::get('/admin/menu/umum', function () {
    return view('admin/menu/umum/index');
});
Route::get('/admin/kitchen crew/', function() {
    return view('admin/kitchen crew/index');
});

// Route::get('/admin', function () {
//     return view('admin/main');
// });
// Route::get('/admin/menu/umum', function () {
//     return view('admin/menu/index');
// });



Route::prefix('order')->name('order.')->group(function() {
    Route::get('','OrderController@keluarga');
    Route::get('keluarga','OrderController@keluarga')->name('keluarga');

    Route::resource('saveKeluarga','OrderKeluargaController');
});
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('', 'MainController@index')->name('main');

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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
