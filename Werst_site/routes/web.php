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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'MainController@main')->name('main');

Route::get('/text_editors', 'MainController@text_editors')->name('text_editors');

Route::get('/frameworks', 'MainController@framework')->name('framework');

Route::get('/courses', 'MainController@courses')->name('courses');

Route::get('/help', 'MainController@articles')->name('articles');
Route::post('/review/check', 'MainController@review_check');

Route::get('/comments/{id}', 'MainController@show')->name('comments');
Route::post('/comments/check', 'MainController@comments_check');

Route::get('/message/{id}', 'MainController@messenger_user')->name('messenger_user');
Route::post('/message/{id}/check', 'MainController@message_check');


Route::get('/search', 'UserController@user_search')->name('user_search');
Route::get('/search/{id}', 'UserController@user_page')->name('user_page');
Route::get('/search/{id}/friends', 'UserController@user_friends')->name('user_friends');

Route::get('/friends', 'UserController@friends')->name('friends');
Route::post('/friends/check', 'UserController@friends_check');
Route::post('/friends/check/true', 'UserController@friends_check_true');
Route::post('/friends/check/false', 'UserController@friends_check_false');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/profile/setting', 'UserController@profile_setting')->name('profile_setting');
Route::post('/profile/setting', 'UserController@update_avatar')->name('profile_setting');
Route::post('/profile/check', 'UserController@profile_setting_check');


