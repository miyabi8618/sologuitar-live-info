<?php

//全員が使用できる
Route::get('/', 'ConcertsController@index');
Route::resource('concerts', 'ConcertsController',  ['only' => ['show']]);
//場所から検索
Route::get('place','ConcertsController@place_index');
Route::group(['prefix' => 'place/kyusyu', 'as' => 'concerts.place.kyusyu.'], function () {
  Route::get('fukuoka', 'ConcertsController@fukuoka')->name('fukuoka');
  Route::get('saga', 'ConcertsController@saga')->name('saga');
  Route::get('nagasaki', 'ConcertsController@nagasaki')->name('nagasaki');
    });


//検索機能
Route::get('/concert/search','ConcertsController@search')->name('concerts.search');


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
//ユーザー認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//ログインしたひとだけの機能
Route::group(['middleware' => ['auth']], function () {
    //ユーザのトップページ
    Route::get('users', 'UsersController@index')->name('users.index');
    //ユーザープロフィールの作成

    //ユーザープロフィールの編集
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');
    //ユーザーがライブ情報を作成する機能
    Route::get('users/concert_create','UsersController@concert_create')->name('users.concert_create');
    Route::post('users','UsersController@concert_store')->name('users.concert_store');
    //ユーザーがライブ情報を編集する機能
    Route::delete('users/{user}/concert_destroy', 'UsersController@concert_destroy')->name('users.concert_destroy');
    Route::get('users/{concert}/concert_edit', 'UsersController@concert_edit')->name('users.concert_edit');
    Route::put('users/{concert}/concert_update', 'UsersController@concert_update')->name('users.concert_update');
    //ユーザーフォロー機能
    Route::post('users/{user}/follow', 'UserFollowController@store')->name('user.follow');
    Route::delete('users/{user}/unfollow', 'UserFollowController@destroy')->name('user.unfollow');
    //コンサートお気に入り機能
    Route::post('user/{concert}/favorite', 'UserFavoriteController@store')->name('user.favorite');
    Route::delete('user/{concert}/unfavorite', 'UserFavoriteController@destroy')->name('user.unfavorite');
});

//ページ遷移（名前が付くまで）
Route::get('/search_word', function () {
  return view('search_word');
});
Route::get('/search_area', function () {
  return view('search_area');
});