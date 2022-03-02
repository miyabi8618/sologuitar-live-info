@extends('layouts.app')

@section('content')

   
    <div class="text-left">
        <h1>お気に入り登録したライブ</h1>
    </div>
    
    <div class="text-left">
        <h1>お気に入りアーティスト</h1>
    </div>
    
    <div class="text-left">
        <h1>公開したライブ</h1>
    </div>
   @include('concerts.concerts')
@endsection