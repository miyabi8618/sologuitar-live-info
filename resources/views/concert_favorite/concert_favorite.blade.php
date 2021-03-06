@if (count($favorite_concerts) > 0)
    <ul class="list-unstyled">
        @foreach ($favorite_concerts as $favorite_concert)
            <li class="media p-2">
                <div class="media-body border border-secondary rounded  p-1">
                    <div>
                        {{-- お気に入りライブ表示 --}}
                        <p class="mb-0">ライブ名：{!! nl2br(e($favorite_concert->title)) !!}</p>
                        <p class="mb-0">場所：{!! nl2br(e($favorite_concert->place)) !!}</p>
                        <p class="mb-0">会場：{!! nl2br(e($favorite_concert->venue)) !!}</p>
                        <p class="mb-0">公演日：{!! nl2br(e($favorite_concert->date)) !!}</p>
                        <p>{!! link_to_route('concerts.show', 'ライブ詳細', ['concert' => $favorite_concert->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $follow_users->links() }}
@endif