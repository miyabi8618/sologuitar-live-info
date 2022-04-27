@if(isset($search_result))
    <h5>{{ $search_result }}</h5>
@else
    {{--検索フォーム--}}
    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.search') }}" method = "get">
        {{ csrf_field() }}
        <input class="form-control mr-sm-2" type="date" placeholder="search" name="search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">検索</button>
        </input>
    </form>
@endif

@if (count($concerts) > 0)
    <ul class="list-unstyled">
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
    </ul>
    {{-- ページネーションのリンク --}}
    {{$concerts->appends(request()->query())->links()}} 
@endif