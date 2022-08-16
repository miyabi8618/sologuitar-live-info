@if (Auth::id() != $concert->user_id)
    @if (Auth::user()->is_favorite($concert->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavorite', $concert->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="far fa-heart fa-lg" style="font-size:1.5em; transform: translateY(-5px);"></i>', ['class' => "btn", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favorite', $concert->id]]) !!}
            {!! Form::button('<i class="fas fa-heart fa-lg" style="color:#FF6633; font-size:1.5em; transform: translateY(-5px);"></i>', ['class' => "btn", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @endif
@endif