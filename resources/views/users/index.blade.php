@extends('layouts.app')

@section('content')


<div class="text-left mt-5">
    <h4>プロフィール</h4>    
    <div class="media-body border border-secondary rounded  p-3 ">
        <ul class="list-group">
          <li class="list-group-item">アーティスト名：{!! nl2br(e($user->name)) !!}</li>
          <li class="list-group-item">住所：{!! nl2br(e($user->address)) !!}</li>
          <li class="list-group-item">誕生日：{!! nl2br(e($user->birthday)) !!}</li>
          <li class="list-group-item">自己紹介：{!! nl2br(e($user->introduction)) !!}</li>
          <li class="list-group-item">WEB：{!! nl2br(e($user->web)) !!}</li>
        </ul>
        {{-- プロフィール編集ページへのリンク --}}
        <p class = pt-1>{!! link_to_route('users.edit', 'プロフィールを編集', ['user' => $user->id], ['class' => 'btn btn-primary']) !!}</p>
    </div>
</div>

{{--お気に入りライブ--}}
    <div class="text-left mt-5">
        <h4>お気に入り登録したライブ</h4>
        @include('concert_favorite.concert_favorite')
    </div>
    
{{--お気に入りアーティスト--}}    
    <div class="text-left mt-5">
        <h4>お気に入りアーティスト</h4>
        @include('user_follow.user_follow')
    </div>
    
{{--公開ライブ--}}    
    <div class="text-left mt-5">
        <h4>公開したライブ</h4>
        @include('concerts.concerts')
    </div>
    
@endsection