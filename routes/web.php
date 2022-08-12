<?php

//全員が使用できる
Route::get('/', 'ConcertsController@index');
//ライブ詳細ページ
Route::resource('concerts', 'ConcertsController',  ['only' => ['show']]);

//ライブ詳細ページ
Route::get('concerts/user/{user}','ConcertsController@user_show')->name('concerts.user_show');

//場所から検索  Route::get('', 'ConcertsController@')->name(''); 
Route::get('place','ConcertsController@place_index');
Route::get('concerts/todoufuken/search' , 'ConcertsController@todoufuken_search')->name('concerts.todoufuken_search');

//ユーザー名から検索    
Route::get('search_users','ConcertsController@search_users_index');
Route::group(['prefix' => 'search_users', 'as' => 'concerts.search_users.search_word.'], function () {
  Route::get('a', 'ConcertsController@a')->name('a');
  Route::get('i', 'ConcertsController@i')->name('i');
  Route::get('u', 'ConcertsController@u')->name('u');
  Route::get('e', 'ConcertsController@e')->name('e');
  Route::get('o', 'ConcertsController@o')->name('o');
  Route::get('ka', 'ConcertsController@ka')->name('ka');
  Route::get('ki', 'ConcertsController@ki')->name('ki');
  Route::get('ku', 'ConcertsController@ku')->name('ku');
  Route::get('ke', 'ConcertsController@ke')->name('ke');
  Route::get('ko', 'ConcertsController@ko')->name('ko');
  Route::get('sa', 'ConcertsController@sa')->name('sa');
  Route::get('si', 'ConcertsController@si')->name('si');
  Route::get('su', 'ConcertsController@su')->name('su');
  Route::get('se', 'ConcertsController@se')->name('se');
  Route::get('so', 'ConcertsController@so')->name('so');
  Route::get('ta', 'ConcertsController@ta')->name('ta');
  Route::get('ti', 'ConcertsController@ti')->name('ti');
  Route::get('tu', 'ConcertsController@tu')->name('tu');
  Route::get('te', 'ConcertsController@te')->name('te');
  Route::get('to', 'ConcertsController@to')->name('to');
  Route::get('na', 'ConcertsController@na')->name('na');
  Route::get('ni', 'ConcertsController@ni')->name('ni');
  Route::get('nu', 'ConcertsController@nu')->name('nu');
  Route::get('ne', 'ConcertsController@ne')->name('ne');
  Route::get('no', 'ConcertsController@no')->name('no');
  Route::get('ha', 'ConcertsController@ha')->name('ha');
  Route::get('hi', 'ConcertsController@hi')->name('hi');
  Route::get('hu', 'ConcertsController@hu')->name('hu');
  Route::get('he', 'ConcertsController@he')->name('he');
  Route::get('ho', 'ConcertsController@ho')->name('ho');
  Route::get('ma', 'ConcertsController@ma')->name('ma');
  Route::get('mi', 'ConcertsController@mi')->name('mi');
  Route::get('mu', 'ConcertsController@mu')->name('mu');
  Route::get('me', 'ConcertsController@me')->name('me');
  Route::get('mo', 'ConcertsController@mo')->name('mo');
  Route::get('ya', 'ConcertsController@ya')->name('ya');
  Route::get('yu', 'ConcertsController@yu')->name('yu');
  Route::get('yo', 'ConcertsController@yo')->name('yo');
  Route::get('ra', 'ConcertsController@ra')->name('ra');
  Route::get('ri', 'ConcertsController@ri')->name('ri');
  Route::get('ru', 'ConcertsController@ru')->name('ru');
  Route::get('re', 'ConcertsController@re')->name('re');
  Route::get('ro', 'ConcertsController@ro')->name('ro');
  Route::get('wa', 'ConcertsController@wa')->name('wa');
  Route::get('wo', 'ConcertsController@wo')->name('wo');
  Route::get('wu', 'ConcertsController@wu')->name('wu');
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