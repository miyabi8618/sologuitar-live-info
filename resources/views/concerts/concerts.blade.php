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
            @if (Auth::id() == $concert->user_id)
                {{-- 投稿削除ボタンのフォーム --}}
                {!! Form::open(['route' => ['users.concert_destroy', $concert->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
                
                {{-- ライブ情報編集ページへのリンク --}}
                {!! link_to_route('users.concert_edit', 'ライブ情報を編集', ['concert' => $concert->id], ['class' => 'btn btn-primary']) !!}
            @endif
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $concerts->links() }}
@endif