@if (count($follow_users) > 0)
    <ul class="media-body border border-secondary rounded p-2 m-2">
        @foreach ($follow_users as $follow_user)
            <div class="container">
                <div class="row">
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="m-1 p-1">{!! link_to_route('concerts.user_show', $follow_user->name, ['user' => $follow_user->id]) !!}</p>
                        {{-- お気に入りアーティストの詳細ページを見れるようにしたい --}}
                        
                    </div>
                </div>
            </div>

        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $follow_users->links() }}
@endif