@extends('layouts.app')

@section('content')


<div class="text-left mt-5">
    <h4>プロフィール</h4>    
    <div class="media-body border border-secondary rounded  p-3 ">
        <ul class="list-group">
          
          @if(empty($user->name))
        　  @else
        　  <li class="list-group-item">アーティスト名：{!! nl2br(e($user->name)) !!}</li>
        　@endif
          
          @if(empty($user->address))
        　  @else
        　  <li class="list-group-item">住所：{!! nl2br(e($user->address)) !!}</li>
        　@endif
        　
        　@if(empty($user->birthday))
        　  @else
        　  <li class="list-group-item">誕生日：{!! nl2br(e($user->birthday)) !!}</li></li>
        　@endif
          
          @if(empty($user->introduction))
        　  @else
        　  <li class="list-group-item">自己紹介：{!! nl2br(e($user->introduction)) !!}</li>
        　@endif
        　
        　@if(empty($user->web))
        　  @else
        　  <li class="list-group-item">WEB：
            <a href="{!! nl2br(e($user->web)) !!}">{!! nl2br(e($user->web)) !!}</a>
            </li>
        　@endif
        　
        　@if($user->artist == 1)
        　  <li class="list-group-item">プロフィール公開中</li>
        　  @else
        　  <li class="list-group-item">プロフィール未公開</li>
        　@endif
          
          
        </ul>
        {{-- プロフィール編集ページへのリンク --}}
        <p class = pt-1>{!! link_to_route('users.edit', 'プロフィールを編集', ['user' => $user->id], ['class' => "btn btn-outline-secondary my-2 my-sm-0"]) !!}</p>
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