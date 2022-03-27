@extends('layouts.app')

@section('content')
    
    <div class="text-left">
        <h1>プロフィール</h1>
    </div>
    <div>
        {{$user}}
        <p class="mb-0">アーティスト名：{!! nl2br(e($user->name)) !!}</p>
        <p class="mb-0">住所：{!! nl2br(e($user->address)) !!}</p>
        <p class="mb-0">誕生日：{!! nl2br(e($user->birthday)) !!}</p>
        <p class="mb-0">自己紹介：{!! nl2br(e($user->introduction)) !!}</p>
        <p class="mb-0">WEB：{!! nl2br(e($user->web)) !!}</p>
    </div>
    {{-- プロフィール編集ページへのリンク --}}
    {!! link_to_route('users.edit', 'プロフィールを編集', ['user' => $user->id], ['class' => 'btn btn-primary']) !!}
    {{-- ライブ情報の作成ページへのリンク --}}
    {!! link_to_route('users.concert_create', 'ライブ情報の作成', [], ['class' => 'btn btn-primary']) !!}


    
    
    
    
    
    <div class="text-left">
        <h1>お気に入り登録したライブ</h1>
        @include('concert_favorite.concert_favorite')
    </div>
    
    <div class="text-left">
        <h1>お気に入りアーティスト</h1>
        @include('user_follow.user_follow')
    </div>
    
    <div class="text-left">
        <h1>公開したライブ</h1>
        @include('concerts.concerts')
    </div>
    
@endsection