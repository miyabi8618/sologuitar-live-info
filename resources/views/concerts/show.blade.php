@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
            <div class="media-body p-4">
                <div class="media-body border border-secondary rounded  p-3 mt-5">
                    <h4>アーティスト情報</h4>
                        <ul class="list-group">
                          <li class="list-group-item">アーティスト名：{!! nl2br(e($user->name)) !!}</li>
                          <li class="list-group-item">住所：{!! nl2br(e($user->address)) !!}</li>
                          <li class="list-group-item">誕生日：{!! nl2br(e($user->birthday)) !!}</li>
                          <li class="list-group-item">自己紹介：{!! nl2br(e($user->introduction)) !!}</li>
                          <li class="list-group-item">WEB：{!! nl2br(e($user->web)) !!}</li>
                        </ul>

                    {{-- フォロー／アンフォローボタン --}}
                    <p>@include('user_follow.follow_button')</p>
                </div>
            
                <div class="media-body border border-secondary rounded  p-3 mt-5">
                    <h4>ライブ詳細</h4>
                        <ul class="list-group">
                          <li class="list-group-item">ライブ名：{!! nl2br(e($concert->title)) !!}</li>
                          <li class="list-group-item">場所：{!! nl2br(e($concert->place)) !!}</li>
                          <li class="list-group-item">会場：{!! nl2br(e($concert->venue)) !!}</li>
                          <li class="list-group-item">日時：{!! nl2br(e($concert->date)) !!}</li>
                          <li class="list-group-item">詳細情報：{!! nl2br(e($concert->content)) !!}</li>
                          <li class="list-group-item">URL：{!! nl2br(e($concert->web)) !!}</li>
                        </ul>   
                    <p>@include('concert_favorite.favorite_button')</p>
                </div>
            </div>
     

    @else
        <div class="media-body p-4">
            <div class="media-body border border-secondary rounded  p-3 mt-5">
                <h4>アーティスト情報</h4>
                    <ul class="list-group">
                      <li class="list-group-item">アーティスト名：{!! nl2br(e($user->name)) !!}</li>
                      <li class="list-group-item">住所：{!! nl2br(e($user->address)) !!}</li>
                      <li class="list-group-item">誕生日：{!! nl2br(e($user->birthday)) !!}</li>
                      <li class="list-group-item">自己紹介：{!! nl2br(e($user->introduction)) !!}</li>
                      <li class="list-group-item">WEB：{!! nl2br(e($user->web)) !!}</li>
                    </ul>
            </div>
        
            <div class="media-body border border-secondary rounded  p-3 mt-5">
                <h4>ライブ詳細</h4>
                    <ul class="list-group">
                      <li class="list-group-item">ライブ名：{!! nl2br(e($concert->title)) !!}</li>
                      <li class="list-group-item">場所：{!! nl2br(e($concert->place)) !!}</li>
                      <li class="list-group-item">会場：{!! nl2br(e($concert->venue)) !!}</li>
                      <li class="list-group-item">日時：{!! nl2br(e($concert->date)) !!}</li>
                      <li class="list-group-item">詳細情報：{!! nl2br(e($concert->content)) !!}</li>
                      <li class="list-group-item">URL：{!! nl2br(e($concert->web)) !!}</li>
                    </ul>   
            </div>
        </div>
    @endif
@endsection