<?php
use App\Mail\welcomeAgain;
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
    return view('welcome');
});

Route::get('/post', 'PostController@index');

Route::get('/post/create', 'PostController@create')->middleware('auth')->name('post/create');

Route::post('/post', 'PostController@store');

Route::get('/post/delete/{id}', 'PostController@destroy')->middleware('auth');

Route::get('/post/edit/{id}', 'PostController@edit')->middleware('auth');

Route::post('/post/edit/{id}', 'PostController@edit')->middleware('auth');

Route::post('/post/update/{id}', 'PostController@update')->middleware('auth');

Route::get('/post/{id}', 'post@show');

Auth::routes();

Route::get('upload', function () {
    return view('upload');
});


Route::get('/mail',function() {
    Mail::to('viky.viky884@gmail.com')->send(new welcomeAgain);
});



Route::get('/home', 'HomeController@index')->name('home');
