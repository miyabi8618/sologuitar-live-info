@extends('layouts.app')

@section('content')

@if (count($users) > 0)
    <div class="text-left py-4">
        <h2>「て」のつくアーティスト</h2>
    </div>
    @foreach ($users as $user)
        <div class="form-inline">
            {{-- 投稿内容 --}}
            <p class="m-1 p-1">{!! link_to_route('concerts.user_show', $user->name, ['user' => $user->id]) !!}</p>
        </div>
    @endforeach
@else
   <div class="text-left py-4">
        <h3>「て」のつくアーティストはいませんでした</h3>
    </div> 
@endif

    {{ $users->links() }}
    
@endsection