<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return redirect('/blog');
});

Route::get('/blog', 'App\Http\Controllers\BlogController@index')->name('blog.home');
Route::get('/blog/{slug}', 'App\Http\Controllers\BlogController@showPost')->name('blog.detail');

//background routing
Route::get('/admin', function () {
    return redirect('/admin/post');
});
Route::middleware('auth')->group(function () {
    Route::resource('admin/post', 'App\Http\Controllers\Admin\PostController', ['except' => 'show']);
    Route::resource('admin/tag', 'App\Http\Controllers\Admin\TagController');
    Route::get('admin/upload', 'App\Http\Controllers\Admin\UploadController@index');

    Route::post('admin/upload/file', 'App\Http\Controllers\Admin\UploadController@uploadFile');
    Route::delete('admin/upload/file', 'App\Http\Controllers\Admin\UploadController@deleteFile');
    Route::post('admin/upload/folder', 'App\Http\Controllers\Admin\UploadController@createFolder');
    Route::delete('admin/upload/folder', 'App\Http\Controllers\Admin\UploadController@deleteFolder');
});

//login logout
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

