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
Route::get('/', 'BlogsController@index');


Route::name('blogs_path')->get('/blogs', 'BlogsController@index');
Route::name('create_blog_path')->get('/blogs/create', 'BlogsController@create')->middleware('auth');
Route::name('store_blog_path')->post('/blogs', 'BlogsController@store')->middleware('auth');
Route::name('blog_path')->get('/blogs/{id}', 'BlogsController@show');
Route::name('edit_blog_path')->get('/blogs/{id}/edit', 'BlogsController@edit')->middleware('auth');
Route::name('update_blog_path')->put('/blogs/{id}', 'BlogsController@update')->middleware('auth');
Route::name('delete_blog_path')->delete('/blogs/{id}', 'BlogsController@destroy')->middleware('auth');





Auth::routes([
    'register' => false
    ]);

Route::get('/home', 'HomeController@index')->name('home');
