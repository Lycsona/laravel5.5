<?php

use Illuminate\Http\Request;

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


//List articles
Route::get('articles', 'ArticleController@index');


//Single article
Route::get('article/{article}', 'ArticleController@show');

//Create new article
Route::post('article', 'ArticleController@store');

//Update article
Route::put('article', 'ArticleController@edit');

//Delete article
Route::delete('article/{id}', 'ArticleController@destroy');