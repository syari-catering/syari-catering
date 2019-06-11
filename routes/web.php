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


// Route::get('/admin', function () {
//     return view('admin/main');
// });
// Route::get('/admin/menu/umum', function () {
//     return view('admin/menu/index');
// });

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

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

Route::prefix('kitchen_crew')->middleware('auth')->name('kitchen_crew.')->group(function () {

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

Route::get('/home', 'HomeController@index')->name('home');
