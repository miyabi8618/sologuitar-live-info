@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="fas fa-star fa-lg" style="color:#FFFF00; font-size:1.5em; transform: translateY(-5px);"></i>', ['class' => "btn", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
            {!! Form::button('<i class="far fa-star fa-lg" style = "font-size:1.5em; transform: translateY(-5px);"></i>', ['class' => "btn", 'type' => 'submit']) !!}
        {!! Form::close() !!}
    @endif
@endif