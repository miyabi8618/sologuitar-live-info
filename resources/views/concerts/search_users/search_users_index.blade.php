@extends('layouts.app')

@section('content')

<div class="text-left mt-5">
    <h3 class='mb-5'>アーティストから探す</h3>    
    
    <div class="media-body border border-secondary rounded p-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.a')}}">あ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.i')}}">い</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.u')}}">う</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.e')}}">え</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.o')}}">お</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ka')}}">か</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ki')}}">き</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ku')}}">く</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ke')}}">け</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ko')}}">こ</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.sa')}}">さ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.si')}}">し</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.su')}}">す</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.se')}}">せ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.so')}}">そ</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ta')}}">た</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ti')}}">ち</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.tu')}}">つ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.te')}}">て</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.to')}}">と</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.na')}}">な</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ni')}}">に</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.nu')}}">ぬ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ne')}}">ね</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.no')}}">の</a>
                        </div>
                    </section>
                </div>
                
                <div class="col-md-6">    
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ha')}}">は</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.hi')}}">ひ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.hu')}}">ふ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.he')}}">へ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ho')}}">ほ</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ma')}}">ま</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.mi')}}">み</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.mu')}}">む</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.me')}}">め</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.mo')}}">も</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ya')}}">や</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.yu')}}">ゆ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.yo')}}">よ</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ra')}}">ら</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ri')}}">り</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ru')}}">る</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.re')}}">れ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.ro')}}">ろ</a>
                        </div>
                    </section>
                    <section>
                        <div class = "m-2">
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.wa')}}">わ</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.wo')}}">を</a>
                            <a class="m-3" href="{{ route('concerts.search_users.search_word.wu')}}">ん</a>
                        </div>
                    </section>
                </div>    
            </div>        
        </div>            
    </div>
</div>

    
@endsection