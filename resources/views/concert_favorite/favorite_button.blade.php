@if (Auth::id() != $concert->user_id)
    @if (Auth::user()->is_favorite($concert->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavorite', $concert->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "btn btn-outline-danger my-2 my-sm-0"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favorite', $concert->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-outline-warning my-2 my-sm-0"]) !!}
        {!! Form::close() !!}
    @endif
@endif