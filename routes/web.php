<?php
//ページ変遷
Route::get('/', function () {
    return view('welcome');
});




// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
//ユーザー認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//ログインしたひとだけの機能
Route::group(['middleware' => ['auth']], function () {
    //ユーザのプロフィールを編集
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');
    //ユーザーがライブ情報を作成する機能
    Route::get('users/concert_create','UsersController@concert_create')->name('users.concert_create');
    Route::post('users','UsersController@concert_store')->name('users.concert_store');
    Route::delete('users/{user}/concert_destroy', 'UsersController@concert_destroy')->name('users.concert_destroy');
    Route::get('users/{concert}/concert_edit', 'UsersController@concert_edit')->name('users.concert_edit');
    Route::put('users/{concert}/concert_update', 'UsersController@concert_update')->name('users.concert_update');
});