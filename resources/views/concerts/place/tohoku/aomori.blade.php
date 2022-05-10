@extends('layouts.app')

@section('content')


    <div class="text-left py-4">
        <h2>青森県の公演情報</h2>
    </div> 
    
@if (count($concerts) > 0)    
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
@endif

    {{ $concerts->links() }}
    
@endsection