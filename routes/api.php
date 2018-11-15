<?php

use Illuminate\Http\Request;
Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

//Route::group(['middleware' => 'auth:api'], function() {
	Route::get('friends', 'FriendController@index');
	Route::get('friends/{friend}', 'FriendController@show');
	Route::post('friends', 'FriendController@store');
	Route::put('friends/{friend}', 'FriendController@update');
	Route::delete('friends/{friend}', 'FriendController@delete');
//});
