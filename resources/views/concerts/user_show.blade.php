@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
            <div class="media-body p-4">
                <div class="form-inline">    
                    <div class = 'p-3 '>
                        <h4>{!! nl2br(e($user->name))!!}のライブ情報</h4>
                    </div>
                    {{-- フォロー／アンフォローボタン --}}
                    <p>@include('user_follow.follow_button')</p>
                </div>  
            
                <div class = "p-3">
                    @if (count($concerts) > 0)
                        <ul class="list-unstyled">
                            @foreach ($concerts as $concert)
                                <li class="media p-2">
                                    <div class="media-body border border-secondary rounded  p-1">
                                        <div>
                                            {{-- 投稿内容 --}}
                                            <p class="mb-0">ライブ名：{!! nl2br(e($concert->title)) !!}</p>
                                            <p class="mb-0">場所：{!! nl2br(e($concert->place)) !!}</p>
                                            <p class="mb-0">会場：{!! nl2br(e($concert->venue)) !!}</p>
                                            <p class="mb-0">公演日：{!! nl2br(e($concert->date)) !!}</p>
                                            <p>{!! link_to_route('concerts.show', 'ライブ詳細', ['concert' => $concert->id]) !!}</p>
                                            <p>@include('concert_favorite.favorite_button')</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        {{-- ページネーションのリンク --}}
                        {{ $concerts->links() }}
                    @endif
                </div>
            </div>
    @else
        <div class="media-body p-4">
                <div class="form-inline">    
                    <div class = 'p-3 '>
                        <h4>{!! nl2br(e($user->name))!!}のライブ情報</h4>
                    </div>
                </div>  
            
                <div class = "p-3">
                    @if (count($concerts) > 0)
                        <ul class="list-unstyled">
                            @foreach ($concerts as $concert)
                                <li class="media p-2">
                                    <div class="media-body border border-secondary rounded  p-1">
                                        <div>
                                            {{-- 投稿内容 --}}
                                            <p class="mb-0">ライブ名：{!! nl2br(e($concert->title)) !!}</p>
                                            <p class="mb-0">場所：{!! nl2br(e($concert->place)) !!}</p>
                                            <p class="mb-0">会場：{!! nl2br(e($concert->venue)) !!}</p>
                                            <p class="mb-0">公演日：{!! nl2br(e($concert->date)) !!}</p>
                                            <p>{!! link_to_route('concerts.show', 'ライブ詳細', ['concert' => $concert->id]) !!}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        {{-- ページネーションのリンク --}}
                        {{ $concerts->links() }}
                    @endif
                </div>
            </div>
    @endif
@endsection