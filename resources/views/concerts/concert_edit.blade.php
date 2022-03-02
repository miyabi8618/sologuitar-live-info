@extends('layouts.app')

@section('content')

    <h1>ライブ情報編集</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($concert, ['route' => 'users.concert_store']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'ライブタイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('place', '場所') !!}
                    {!! Form::text('place', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('venue', 'ライブ会場') !!}
                    {!! Form::text('venue', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('date', '公演日') !!}
                    {!! Form::text('date', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'ライブ詳細情報') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('web', 'URL(自身のホームページ)') !!}
                    {!! Form::text('web', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection