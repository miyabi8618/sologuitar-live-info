@if (count($follow_users) > 0)
    <ul class="list-unstyled">
        @foreach ($follow_users as $follow_user)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($follow_user->name)) !!}</p>
                        {{-- お気に入りアーティストの詳細ページを見れるようにしたい --}}
                        
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $follow_users->links() }}
@endif