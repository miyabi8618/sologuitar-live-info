@extends('layouts.app')

@section('content')

<div class="text-left mt-5">
    <h3 class='mb-5'>地域から探す</h3>    
    
    <div class="media-body border border-secondary rounded p-5 ">
        <section>
            <h5 class="border-bottom border-dark p-2">北海道・東北</h5>
            <div class = "">
                <a class="" href="{{ route('concerts.place.tohoku.hokkaido')}}">北海道</a>
                <a class="" href="{{ route('concerts.place.tohoku.aomori')}}">青森県</a>
                <a class="" href="{{ route('concerts.place.tohoku.iwate')}}">岩手県</a>
                <a class="" href="{{ route('concerts.place.tohoku.miyagi')}}">宮城県</a>
                <a class="" href="{{ route('concerts.place.tohoku.akita')}}">秋田県</a>
                <a class="" href="{{ route('concerts.place.tohoku.yamagata')}}">山形県</a>
                <a class="" href="{{ route('concerts.place.tohoku.fukushima')}}">福島県</a>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">関東</h5>
            <div class = "">
                <a class="" href="{{ route('concerts.place.kanto.ibaraki')}}">茨城県</a>
                <a class="" href="{{ route('concerts.place.kanto.tochigi')}}">栃木県</a>
                <a class="" href="{{ route('concerts.place.kanto.gunma')}}">群馬県</a>
                <a class="" href="{{ route('concerts.place.kanto.saitama')}}">埼玉県</a>
                <a class="" href="{{ route('concerts.place.kanto.chiba')}}">千葉県</a>
                <a class="" href="{{ route('concerts.place.kanto.tokyo')}}">東京都</a>
                <a class="" href="{{ route('concerts.place.kanto.kanagawa')}}">神奈川県</a>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">中部</h5>
            <div class = "">
                <a class="" href="{{ route('concerts.place.chubu.niigata')}}">新潟県</a>
                <a class="" href="{{ route('concerts.place.chubu.toyama')}}">富山県</a>
                <a class="" href="{{ route('concerts.place.chubu.ishikawa')}}">石川県</a>
                <a class="" href="{{ route('concerts.place.chubu.fukui')}}">福井県</a>
                <a class="" href="{{ route('concerts.place.chubu.yamanashi')}}">山梨県</a>
                <a class="" href="{{ route('concerts.place.chubu.nagano')}}">長野県</a>
                <a class="" href="{{ route('concerts.place.chubu.gifu')}}">岐阜県</a>
                <a class="" href="{{ route('concerts.place.chubu.shizuoka')}}">静岡県</a>
                <a class="" href="{{ route('concerts.place.chubu.aichi')}}">愛知県</a>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">近畿</h5>
            <div class = "">
                <a class="" href="{{ route('concerts.place.kinki.mie')}}">三重県</a>
                <a class="" href="{{ route('concerts.place.kinki.shiga')}}">滋賀県</a>
                <a class="" href="{{ route('concerts.place.kinki.kyoto')}}">京都府</a>
                <a class="" href="{{ route('concerts.place.kinki.osaka')}}">大阪府</a>
                <a class="" href="{{ route('concerts.place.kinki.hyogo')}}">兵庫県</a>
                <a class="" href="{{ route('concerts.place.kinki.nara')}}">奈良県</a>
                <a class="" href="{{ route('concerts.place.kinki.wakayama')}}">和歌山県</a>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">中国</h5>
            <div class = "">
                <a class="" href="{{ route('concerts.place.chugoku.tottori')}}">鳥取県</a>
                <a class="" href="{{ route('concerts.place.chugoku.shimane')}}">島根県</a>
                <a class="" href="{{ route('concerts.place.chugoku.okayama')}}">岡山県</a>
                <a class="" href="{{ route('concerts.place.chugoku.hiroshima')}}">広島県</a>
                <a class="" href="{{ route('concerts.place.chugoku.yamaguchi')}}">山口県</a>
            </div>
        </section>
        
        <section>
            <h5 class="border-bottom border-dark p-2">四国</h5>
            <div class = "">
                <a class="" href="{{ route('concerts.place.shikoku.tokushima')}}">徳島県</a>
                <a class="" href="{{ route('concerts.place.shikoku.kagawa')}}">香川県</a>
                <a class="" href="{{ route('concerts.place.shikoku.ehime')}}">愛媛県</a>
                <a class="" href="{{ route('concerts.place.shikoku.kochi')}}">高知県</a>
            </div>
        </section>
        
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
        
    </div>
</div>

    
@endsection