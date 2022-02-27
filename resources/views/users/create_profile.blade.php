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
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('birthday', '生年月日') !!}
                    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('introduction', '自己紹介') !!}
                    {!! Form::text('introduction', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('web', 'URL (自身のホームページ)') !!}
                    {!! Form::text('web', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('artist', 'アーティスト登録') !!}
                    {{Form::checkbox('checkSkill', 'PHP／Laravel', false, ['class'=>'custom-control-input','id'=>'checkSkill1'])}}

                </div>
                {!! Form::submit('新規登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection