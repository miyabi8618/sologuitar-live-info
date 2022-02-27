<?php
//ページ変遷
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', function () {
//    return view('users.edit_profile');
//});


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

    
});