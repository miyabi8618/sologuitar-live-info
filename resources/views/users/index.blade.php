@extends('layouts.app')

@section('content')
    
    <div class="text-left">
        <h1>プロフィール</h1>
    </div>
    <div class="text-left">
        <h3>名前: {{$user->name}}</h3>
        <h3>住所: {{$user->address}}</h3>
        <h3>誕生日: {{$user->birthday}}</h3>
        <h3>自己紹介: {{$user->introduction}}</h3>
        <h3>Web: {{$user->web}}</h3>
    </div>
    {!! link_to_route('users.edit', 'プロフィールを編集', ['user' => $user->id], ['class' => 'btn btn-primary']) !!}
    
    
    
    
    
    <div class="text-left">
        <h1>お気に入り登録したライブ</h1>
    </div>
    
    <div class="text-left">
        <h1>お気に入りアーティスト</h1>
    </div>
    
    <div class="text-left">
        <h1>公開したライブ</h1>
    </div>
    
@endsection