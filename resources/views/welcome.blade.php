@extends('layouts.app')

@section('content')

    <div class="text-left">
        <h1>全国の公演情報</h1>
    </div>

    @include('concerts.all_concert')
    
@endsection