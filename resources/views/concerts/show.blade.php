@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
            <div class="media-body p-4">
                <div class="media-body border border-secondary rounded  p-3 mt-5">
                    <h4>アーティスト情報</h4>
                        <ul class="list-group">
                          @if(empty($user->name))
                        　  @else
                        　  <li class="list-group-item">名前：{!! nl2br(e($user->name)) !!}</li>
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
                          <p>{!! link_to_route('concerts.user_show', '他のライブ', ['user' => $user->id]) !!}</p>
                        </ul>

                    {{-- フォロー／アンフォローボタン --}}
                    <p>@include('user_follow.follow_button')</p>
                </div>
            
                <div class="media-body border border-secondary rounded  p-3 mt-5">
                    <h4>ライブ詳細</h4>
                        <ul class="list-group">
                            
                          @if(empty($concert->title))
                        　  @else
                        　  <li class="list-group-item">ライブ名：{!! nl2br(e($concert->title)) !!}</li>
                        　@endif
                        　
                        　@if(empty($concert->place))
                        　  @else
                        　  <li class="list-group-item">場所：{!! nl2br(e($concert->place)) !!}</li>
                        　@endif
                          
                          @if(empty($concert->venue))
                        　  @else
                        　  <li class="list-group-item">会場：{!! nl2br(e($concert->venue)) !!}</li>
                        　@endif
                        　
                        　@if(empty($concert->date))
                        　  @else
                        　  <li class="list-group-item">日時：{!! nl2br(e($concert->date)) !!}</li>
                        　@endif
                        　
                        　@if(empty($concert->content))
                        　  @else
                        　  <li class="list-group-item">詳細情報：{!! nl2br(e($concert->content)) !!}</li>
                        　@endif
                          
                          @if(empty($concert->web))
                        　  @else
                        　  <li class="list-group-item">WEB：
                            <a href="{!! nl2br(e($concert->web)) !!}">{!! nl2br(e($concert->web)) !!}</a>
                            </li>
                        　@endif
                        　
                        </ul>   
                    <p>@include('concert_favorite.favorite_button')</p>
                </div>
            </div>
     

    @else
        <div class="media-body p-4">
            <div class="media-body border border-secondary rounded  p-3 mt-5">
                <h4>アーティスト情報</h4>
                    <ul class="list-group">
                      @if(empty($user->name))
                    　  @else
                    　  <li class="list-group-item">名前：{!! nl2br(e($user->name)) !!}</li>
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
                      <p>{!! link_to_route('concerts.user_show', '他のライブ', ['user' => $user->id]) !!}</p>
                    </ul>
            </div>
        
            <div class="media-body border border-secondary rounded  p-3 mt-5">
                <h4>ライブ詳細</h4>
                    <ul class="list-group">
                      @if(empty($concert->title))
                    　  @else
                    　  <li class="list-group-item">ライブ名：{!! nl2br(e($concert->title)) !!}</li>
                    　@endif
                    　
                    　@if(empty($concert->place))
                    　  @else
                    　  <li class="list-group-item">場所：{!! nl2br(e($concert->place)) !!}</li>
                    　@endif
                      
                      @if(empty($concert->venue))
                    　  @else
                    　  <li class="list-group-item">会場：{!! nl2br(e($concert->venue)) !!}</li>
                    　@endif
                    　
                    　@if(empty($concert->date))
                    　  @else
                    　  <li class="list-group-item">日時：{!! nl2br(e($concert->date)) !!}</li>
                    　@endif
                    　
                    　@if(empty($concert->content))
                    　  @else
                    　  <li class="list-group-item">詳細情報：{!! nl2br(e($concert->content)) !!}</li>
                    　@endif
                      
                      @if(empty($concert->web))
                    　  @else
                    　  <li class="list-group-item">WEB：
                        <a href="{!! nl2br(e($concert->web)) !!}">{!! nl2br(e($concert->web)) !!}</a>
                        </li>
                    　@endif
                    </ul>   
            </div>
        </div>
    @endif
@endsection