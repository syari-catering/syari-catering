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
    return view('admin/index');
});

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
