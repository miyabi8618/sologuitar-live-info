<?php

//全員が使用できる
Route::get('/', 'ConcertsController@index');
Route::resource('concerts', 'ConcertsController',  ['only' => ['show']]);
//場所から検索  Route::get('', 'ConcertsController@')->name(''); 
Route::get('place','ConcertsController@place_index');

Route::group(['prefix' => 'place/kyushu', 'as' => 'concerts.place.kyushu.'], function () {
  Route::get('fukuoka', 'ConcertsController@fukuoka')->name('fukuoka');
  Route::get('saga', 'ConcertsController@saga')->name('saga');
  Route::get('nagasaki', 'ConcertsController@nagasaki')->name('nagasaki');
  Route::get('kumamoto', 'ConcertsController@kumamoto')->name('kumamoto');
  Route::get('oita', 'ConcertsController@oita')->name('oita');
  Route::get('miyazaki', 'ConcertsController@miyazaki')->name('miyazaki');
  Route::get('kagoshima', 'ConcertsController@kagoshima')->name('kagoshima');
  Route::get('okinawa', 'ConcertsController@okinawa')->name('okinawa');
    });
    
Route::group(['prefix' => 'place/tohoku', 'as' => 'concerts.place.tohoku.'], function () {
  Route::get('hokkaido', 'ConcertsController@hokkaido')->name('hokkaido');
  Route::get('aomori', 'ConcertsController@aomori')->name('aomori');
  Route::get('iwate', 'ConcertsController@iwate')->name('iwate');
  Route::get('miyagi', 'ConcertsController@miyagi')->name('miyagi');
  Route::get('akita', 'ConcertsController@akita')->name('akita');
  Route::get('yamagata', 'ConcertsController@yamagata')->name('yamagata');
  Route::get('fukushima', 'ConcertsController@fukushima')->name('fukushima');
    });
    
Route::group(['prefix' => 'place/kanto', 'as' => 'concerts.place.kanto.'], function () {
  Route::get('ibaraki', 'ConcertsController@ibaraki')->name('ibaraki');
  Route::get('tochigi', 'ConcertsController@tochigi')->name('tochigi');
  Route::get('gunma', 'ConcertsController@gunma')->name('gunma');
  Route::get('saitama', 'ConcertsController@saitama')->name('saitama');
  Route::get('chiba', 'ConcertsController@chiba')->name('chiba');
  Route::get('tokyo', 'ConcertsController@tokyo')->name('tokyo');
  Route::get('kanagawa', 'ConcertsController@kanagawa')->name('kanagawa');
    });
    
Route::group(['prefix' => 'place/chubu', 'as' => 'concerts.place.chubu.'], function () {
  Route::get('niigata', 'ConcertsController@niigata')->name('niigata');
  Route::get('toyama', 'ConcertsController@toyama')->name('toyama');
  Route::get('ishikawa', 'ConcertsController@ishikawa')->name('ishikawa');
  Route::get('fukui', 'ConcertsController@fukui')->name('fukui');
  Route::get('yamanashi', 'ConcertsController@yamanashi')->name('yamanashi');
  Route::get('nagano', 'ConcertsController@nagano')->name('nagano');
  Route::get('gifu', 'ConcertsController@gifu')->name('gifu');
  Route::get('shizuoka', 'ConcertsController@shizuoka')->name('shizuoka');
  Route::get('aichi', 'ConcertsController@aichi')->name('aichi');
    });
    
Route::group(['prefix' => 'place/kinki', 'as' => 'concerts.place.kinki.'], function () {
  Route::get('mie', 'ConcertsController@mie')->name('mie'); 
  Route::get('shiga', 'ConcertsController@shiga')->name('shiga'); 
  Route::get('kyoto', 'ConcertsController@kyoto')->name('kyoto'); 
  Route::get('osaka', 'ConcertsController@osaka')->name('osaka'); 
  Route::get('hyogo', 'ConcertsController@hyogo')->name('hyogo'); 
  Route::get('nara', 'ConcertsController@nara')->name('nara'); 
  Route::get('wakayama', 'ConcertsController@wakayama')->name('wakayama'); 
    });
    
Route::group(['prefix' => 'place/chugoku', 'as' => 'concerts.place.chugoku.'], function () {
  Route::get('tottori', 'ConcertsController@tottori')->name('tottori');
  Route::get('shimane', 'ConcertsController@shimane')->name('shimane'); 
  Route::get('okayama', 'ConcertsController@okayama')->name('okayama'); 
  Route::get('hiroshima', 'ConcertsController@hiroshima')->name('hiroshima'); 
  Route::get('yamaguchi', 'ConcertsController@yamaguchi')->name('yamaguchi'); 
    });
    
Route::group(['prefix' => 'place/shikoku', 'as' => 'concerts.place.shikoku.'], function () {
  Route::get('tokushima', 'ConcertsController@tokushima')->name('tokushima');
  Route::get('kagawa', 'ConcertsController@kagawa')->name('kagawa'); 
  Route::get('ehime', 'ConcertsController@ehime')->name('ehime'); 
  Route::get('kochi', 'ConcertsController@kochi')->name('kochi'); 
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