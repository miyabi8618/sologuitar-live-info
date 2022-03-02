@extends('layouts.app')

@section('content')
    @if(Auth::check())
    <div class="text-left">
        <h1>ログイン後全国の公演情報</h1>
        
    </div>
    
    @else
    <div class="text-left">
        <h1>全国の公演情報</h1>
    </div>
    @endif

    
@endsection