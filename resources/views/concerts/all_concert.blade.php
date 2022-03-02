@if (count($concerts) > 0)
    <ul class="list-unstyled">
        @foreach ($concerts as $concert)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">ライブ名{!! nl2br(e($concert->title)) !!}</p>
                        <p class="mb-0">場所{!! nl2br(e($concert->place)) !!}</p>
                        <p class="mb-0">会場{!! nl2br(e($concert->venue)) !!}</p>
                        <p class="mb-0">日時{!! nl2br(e($concert->date)) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}

@endif