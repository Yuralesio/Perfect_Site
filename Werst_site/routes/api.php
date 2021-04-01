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

Route::get('articles', 'Api\ApiController@api_articles');
Route::get('articles/{id}', 'Api\ApiController@api_articlesById');

Route::get('comments', 'Api\ApiController@api_comments');
Route::get('comments/{id}', 'Api\ApiController@api_commentsById');

Route::get('users', 'Api\ApiController@api_users');
Route::get('user/{id}', 'Api\ApiController@api_userById');

Route::post('login', 'Api\ApiController@api_login');

Route::group(['middleware'=> ['jwt.verify']],function (){
    Route::post('articles', 'Api\ApiController@api_articlesSave');
    Route::put('articles/{id}', 'Api\ApiController@api_articlesEdit');
    Route::delete('articles/{id}', 'Api\ApiController@api_articlesDelete');

    Route::post('comments', 'Api\ApiController@api_commentsSave');
    Route::put('comments/{id}', 'Api\ApiController@api_commentsEdit');
    Route::delete('comments/{id}', 'Api\ApiController@api_commentsDelete');

    Route::get('refresh', 'Api\ApiController@api_refresh');

});


