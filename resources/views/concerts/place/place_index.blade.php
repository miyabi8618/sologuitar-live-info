@extends('layouts.app')

@section('content')

<div class="text-left mt-5">
    <h3 class='mb-5'>地域から探す</h3>    
    
    <div class="media-body border border-secondary rounded p-5 ">
        <section>
            <h5 class="border-bottom border-dark p-2">九州・沖縄</h5>
                <div class = "">
                    <a class="" href="{{ route('concerts.place.kyushu.fukuoka')}}">福岡県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.saga')}}">佐賀県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.nagasaki')}}">長崎県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.kumamoto')}}">熊本県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.oita')}}">大分県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.miyazaki')}}">宮崎県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.kagoshima')}}">鹿児島県</a>
                    <a class="" href="{{ route('concerts.place.kyushu.okinawa')}}">沖縄県</a>
                </div>
        </section>
        <section>
            <h5 class="border-bottom border-dark p-2">九州・沖縄</h5>
            <div class = "">
                <a class="" href="/">福岡県</a>
                <a class="" href="/">福岡県</a>
                <a class="" href="/">福岡県</a>
                <a class="" href="/">福岡県</a>
                <a class="" href="/">福岡県</a>
                <a class="" href="/">福岡県</a>
            </div>
        </section>
    </div>
</div>

    
@endsection