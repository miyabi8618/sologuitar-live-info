<div class="row">
    <div class="col-sm-6 offset-sm-3">
        {{-- ルーティング、コントローラーを新たに作成して実装する--}}
        {!! Form::open(['route' => ['users.search'], 'method' => 'put']) !!}
            {{-- ユーザーの新規作成後に必要なフォームを作成（プロフィール作成ページ）--}}

            <div class="form-group">
                {!! Form::label('keyword', '検索キーワード') !!}
                {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('プロフィールを更新', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
        
    </div>
</div>
