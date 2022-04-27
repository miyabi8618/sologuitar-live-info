<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            {{-- トップページへのリンク --}}
            <a class="navbar-brand" href="/"><h3>ソロギターライブ情報</h3></a>
    
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
              <div class="d-flex flex-column bd-highlight mb-3">
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">

                        @if (Auth::check())
                        {{-- ユーザ一覧ページへのリンク --}}
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                {{-- ログアウトへのリンク（リンク作成済み） --}}
                                <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                                {{-- ユーザページへのリンク（リンク作成済み） --}}
                                <li class="dropdown-item">{!! link_to_route('users.index', 'マイページ') !!}</li>
                               {{-- ライブ作成ページへのリンク(リンク作成済み) --}}
                                <li class="dropdown-item">{!! link_to_route('users.concert_create', 'ライブ情報の作成') !!}</li>
                            </ul>
                        </li>
                        @else    
                            {{-- ログインページへのリンク（リンク作成済み） --}}
                            <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                            {{-- ユーザ登録ページへのリンク（リンク作成済み） --}}
                            <li>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                        @endif
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        {{-- 地域から探すページへのリンク --}}
                        <li class="nav-item"><a href="{{ url('/search_area') }}" class="nav-link">地域から探す</a></li>
                        {{-- アーティストから探すページへのリンク --}}
                        <li class="nav-item"><a href="{{ url('/search_word') }}" class="nav-link">アーティストから探す　　</a></li>
                        {{--検索フォーム--}}
                        <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.search') }}" method = "get">
                            {{ csrf_field() }}
                            <input class="form-control mr-sm-2" type="text" placeholder="search" name="search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
                            </input>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>