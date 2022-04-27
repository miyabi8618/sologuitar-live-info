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
                    </div>
                                    
            @if (Auth::id() == $concert->user_id)
                {{-- ライブ情報編集ページへのリンク --}}
                {!! link_to_route('users.concert_edit', 'ライブ情報を編集', ['concert' => $concert->id], ['class' => "btn btn-outline-secondary my-2 my-sm-0"]) !!}
            @endif
                </div>

            </li>

        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $concerts->links() }}
@endif