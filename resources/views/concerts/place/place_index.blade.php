@extends('layouts.app')

@section('content')

<div class="text-left mt-5">
    <h3 class='mb-5'>地域から探す</h3>    
    
    <div class="media-body border border-secondary rounded p-5 ">
        <section>
            <h5 class="border-bottom border-dark p-2">北海道・東北</h5>
            <div class = "row m-1">
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="北海道">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">北海道</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="青森県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">青森県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="秋田県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">秋田県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="岩手県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">岩手県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="山形県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">山形県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="福島県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">福島県</button>
                    </input>
                </form>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">関東</h5>
            <div class = "row m-1">
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="茨城県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">茨城県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="栃木県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">栃木県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="群馬県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">群馬県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="埼玉県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">埼玉県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="千葉県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">千葉県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="東京都">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">東京都</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="神奈川県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">神奈川県</button>
                    </input>
                </form>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">中部</h5>
            <div class = "row m-1">
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="新潟県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">新潟県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="富山県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">富山県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="石川県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">石川県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="福井県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">福井県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="山梨県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">山梨県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="長野県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">長野県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="岐阜県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">岐阜県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="静岡県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">静岡県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="愛知県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">愛知県</button>
                    </input>
                </form>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">近畿</h5>
            <div class = "row m-1">
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="三重県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">三重県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="滋賀県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">滋賀県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="京都府">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">京都府</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="大阪府">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">大阪府</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="兵庫県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">兵庫県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="奈良県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">奈良県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="和歌山県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">和歌山県</button>
                    </input>
                </form>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">中国</h5>
            <div class = "row m-1">
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="鳥取県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">鳥取県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="島根県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">島根県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="岡山県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">岡山県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="広島県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">広島県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="兵庫県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">山口県</button>
                    </input>
                </form>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">四国</h5>
            <div class = "row m-1">
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="徳島県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">徳島県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="香川県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">香川県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="愛媛県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">愛媛県</button>
                    </input>
                </form>
                <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="高知県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">高知県</button>
                    </input>
                </form>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">九州・沖縄</h5>
                <div class = "row m-1">
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                    <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="福岡県">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">福岡県</button>
                    </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="佐賀県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">佐賀県</button>
                        </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="長崎県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">長崎県</button>
                        </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="熊本県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">熊本県</button>
                        </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="大分県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">大分県</button>
                        </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="宮崎県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">宮崎県</button>
                        </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="鹿児島県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">鹿児島県</button>
                        </input>
                    </form>
                    <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.todoufuken_search') }}" method = "get">
                        <input class="form-control mr-sm-2" type="hidden" name="todoufuken" value="沖縄県">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">沖縄県</button>
                        </input>
                    </form>
                </div>
        </section>
                    
        
    </div>
</div>

    
@endsection