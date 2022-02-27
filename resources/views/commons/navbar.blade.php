<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">ソロギターライブ情報</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

          <div class="d-flex flex-column bd-highlight mb-3">
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    @if (Auth::check())
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li class="nav-item"><a href="#" class="nav-link">Users</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                            {{-- ユーザページへのリンク --}}
                            <li class="dropdown-item"><a href="#">マイページ</a></li>
                            <li class="dropdown-divider"></li>
                            {{-- ライブ作成ページへのリンク【注意：アーティスト登録しているかどうかで表示される】 --}}
                            <li class="dropdown-item"><a href="#">ライブ情報を作成</a></li>
                            <li class="dropdown-divider"></li>
                        </ul>
                    </li>
                    @else    
                        
                        {{-- ログインページへのリンク（リンク） --}}
                        <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                        {{-- ユーザ登録ページへのリンク（リンク作成済み） --}}
                        <li>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                    @endif
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    {{-- 地域から探すページへのリンク --}}
                    <li class="nav-item"><a href="#" class="nav-link">地域から探す</a></li>
                    {{-- アーティストから探すページへのリンク --}}
                    <li class="nav-item"><a href="#" class="nav-link">アーティストから探す</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
</header>