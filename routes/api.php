<?php

use Illuminate\Http\Request;
use App\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/helo',function() {
  return '';
});

Route::get('post',function(){
    $post = Post::all();
    return Response($post,200);
})->middleware('auth:api');

Route::post('post',function(){
    $post = Post::all();
    return Response($post,200);
})->middleware('auth:api');
