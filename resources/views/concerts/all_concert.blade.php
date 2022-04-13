@if (count($concerts) > 0)
    <ul class="list-unstyled">
        @foreach ($concerts as $concert)
            @if(in_array($concert->user_id , $user ,true))
                <li class="media mb-3">
                    <div class="media-body">
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
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $concerts->links() }}
@endif