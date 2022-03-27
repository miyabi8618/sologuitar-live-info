@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <li class="media mb-3">
            <div class="media-body">
                <h4>アーティスト情報</h4>
                    <div>
                        {{$user}}
                        <p class="mb-0">アーティスト名：{!! nl2br(e($user->name)) !!}</p>
                        <p class="mb-0">住所：{!! nl2br(e($user->address)) !!}</p>
                        <p class="mb-0">誕生日：{!! nl2br(e($user->birthday)) !!}</p>
                        <p class="mb-0">自己紹介：{!! nl2br(e($user->introduction)) !!}</p>
                        <p class="mb-0">WEB：{!! nl2br(e($user->web)) !!}</p>
                        {{-- フォロー／アンフォローボタン --}}
                        @include('user_follow.follow_button')
                    </div>
                <h4>ライブ詳細</h4>
                    <div>
                        {{-- 投稿内容 --}}
                        {{$concert}}
                        <p class="mb-0">ライブ名：{!! nl2br(e($concert->title)) !!}</p>
                        <p class="mb-0">場所：{!! nl2br(e($concert->place)) !!}</p>
                        <p class="mb-0">会場：{!! nl2br(e($concert->venue)) !!}</p>
                        <p class="mb-0">日時：{!! nl2br(e($concert->date)) !!}</p>
                        <p class="mb-0">詳細情報：{!! nl2br(e($concert->content)) !!}</p>
                        <p class="mb-0">URL：{!! nl2br(e($concert->web)) !!}</p>
                        @include('concert_favorite.favorite_button')
                    </div>
            </div>
        </li>

    @else
        <li class="media mb-3">
            <div class="media-body">
                <h4>アーティスト情報</h4>
                    <div>
                        <p class="mb-0">アーティスト名：{!! nl2br(e($user->name)) !!}</p>
                        <p class="mb-0">住所：{!! nl2br(e($user->address)) !!}</p>
                        <p class="mb-0">誕生日：{!! nl2br(e($user->birthday)) !!}</p>
                        <p class="mb-0">自己紹介：{!! nl2br(e($user->introduction)) !!}</p>
                        <p class="mb-0">WEB：{!! nl2br(e($user->web)) !!}</p>
                    </div>
                <h4>ライブ詳細</h4>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">ライブ名：{!! nl2br(e($concert->title)) !!}</p>
                        <p class="mb-0">場所：{!! nl2br(e($concert->place)) !!}</p>
                        <p class="mb-0">会場：{!! nl2br(e($concert->venue)) !!}</p>
                        <p class="mb-0">日時：{!! nl2br(e($concert->date)) !!}</p>
                        <p class="mb-0">詳細情報：{!! nl2br(e($concert->content)) !!}</p>
                        <p class="mb-0">URL：{!! nl2br(e($concert->web)) !!}</p>
                    </div>
            </div>
        </li>
    @endif
@endsection