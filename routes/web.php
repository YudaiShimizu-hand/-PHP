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

Route::get('/', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/create', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::get('/{post}/show', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
Route::patch('/{post}/edit', 'App\Http\Controllers\PostController@update')->name('posts.update');
Route::delete('/{post}/destroy', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');

Route::post('/{post}/comments', 'App\Http\Controllers\CommentController@store')->name('comments.store');
