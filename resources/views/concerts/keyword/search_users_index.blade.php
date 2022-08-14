@extends('layouts.app')

@section('content')

<div class="text-left mt-5">
    <h3 class='mb-5'>アーティストから探す</h3>    
    
    <div class="media-body border border-secondary rounded p-5 ">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="あ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">あ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="い">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">い</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="う">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">う</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="え">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">え</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="お">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">お</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="か">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">か</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="き">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">き</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="く">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">く</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="け">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">け</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="こ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">こ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="さ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">さ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="し">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">し</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="す">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">す</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="せ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">せ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="そ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">そ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="た">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">た</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ち">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ち</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="つ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">つ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="て">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">て</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="と">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">と</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="な">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">な</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="に">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">に</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぬ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぬ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ね">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ね</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="の">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">の</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="は">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">は</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ひ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ひ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ふ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ふ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="へ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">へ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ほ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ほ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ま">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ま</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="み">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">み</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="む">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">む</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="め">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">め</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="も">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">も</button>
                                </input>
                            </form>
                        </div>
                    </section>
                </div>
                
                <div class="col-md-5">    
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="や">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">や</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ゆ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ゆ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="よ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">よ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ら">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ら</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="り">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">り</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="る">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">る</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="れ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">れ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ろ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ろ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="わ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">わ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="を">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">を</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ん">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ん</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="が">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">が</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぎ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぎ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぐ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぐ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="げ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">げ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ご">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ご</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ざ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ざ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="じ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">じ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ず">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ず</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぜ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぜ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぞ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぞ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="だ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">だ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぢ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぢ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="づ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">づ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="で">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">で</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ど">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ど</button>
                                </input>
                            </form>
                        </div>
                    </section>
                    <section>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ば">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ば</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="び">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">び</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぶ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぶ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="べ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">べ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぼ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぼ</button>
                                </input>
                            </form>
                        </div>
                        <div class = "row m-3">
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぱ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぱ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぴ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぴ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぷ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぷ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぺ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぺ</button>
                                </input>
                            </form>
                            <form class="form-inline my-2 my-lg-0" action = "{{ route('concerts.users_search') }}" method = "get">
                                <input class="form-control mr-sm-2" type="hidden" name="keyword" value="ぽ">
                                    <button class="btn btn-outline-secondary mx-1" type="submit">ぽ</button>
                                </input>
                            </form>
                        </div>
                    </section>
                </div>    
            </div>        
        </div>            
    </div>
</div>

    
@endsection