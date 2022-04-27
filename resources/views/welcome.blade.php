@extends('layouts.app')

@section('content')

    <div class="text-left py-4">
        <h2>全国の公演情報</h2>
    </div>

    @include('concerts.all_concert')
    
@endsection