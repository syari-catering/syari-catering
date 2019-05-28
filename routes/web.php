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

// Route::prefix('admin')->middleware('auth', 'role:Admin')->name('admin.')->group(function () {
//     Route::resource('post', 'Admin\PostController');
//     Route::resource('category', 'Admin\CategoriesController');

//     Route::get('category/{category}/post', 'Admin\CategoryPostController@index')->name('category.post');
//     Route::get('author/{user}/post', 'Admin\AuthorController@index')->name('author.post');
// });
