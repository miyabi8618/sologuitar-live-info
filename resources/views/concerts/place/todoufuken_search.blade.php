@extends('layouts.app')

@section('content')

@if (count($concerts) > 0) 
    <div class="text-left py-4">
        <h3>{{$todoufuken}}の公演情報</h3>
    </div> 
    @foreach ($concerts as $concert)
         @if(in_array($concert->user_id , $user ,true))
                <li class="media p-4">
                    <div class="media-body border border-secondary rounded  p-3">
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
            @endif
    @endforeach
@else
    <div class="text-left py-4">
        <h3>{{ $search_result }}</h3S>
    </div>
@endif

   {{$concerts->appends(request()->query())->links()}} 
    
    

@endsection