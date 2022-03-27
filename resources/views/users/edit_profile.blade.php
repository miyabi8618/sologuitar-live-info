@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>プロフィール作成</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {{-- ルーティング、コントローラーを新たに作成して実装する--}}
            {!! Form::model($user, ['route' => ['users.update',$user->id], 'method' => 'put']) !!}
                {{-- ユーザーの新規作成後に必要なフォームを作成（プロフィール作成ページ）--}}

                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('address', '場所') !!}
                    <select type="text" class="form-control" name="address">                          
                        @foreach(config('pref') as $key => $score)
                            <option value="{{ $score }}">{{ $score }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    {!! Form::label('birthday', '生年月日') !!}
                    {!! Form::date('birthday', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('introduction', '自己紹介') !!}
                    {!! Form::text('introduction', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('web', 'URL (自身のホームページ)') !!}
                    {!! Form::text('web', null, ['class' => 'form-control']) !!}
                </div>
                
                {{--コメントアウト<div class="form-group">
                    {!! Form::label('artist', 'アーティスト登録') !!}
                    {!! Form::checkbox('artist', '1', false, ['class'=>'circle']) !!}
                    <p>※プロフィールが公開されます</p>

                </div>--}}
                {!! Form::submit('プロフィールを更新', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            {{-- アカウント削除 --}}
            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection