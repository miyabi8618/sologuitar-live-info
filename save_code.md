レジスターコントローラー
return Validator::make の中に書いていた
        〇バリデーション
            //ユーザのプロフィール作成に使用
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'birthday' => [],
            'introduction' => ['required', 'string', 'max:255'],
            'web' => [],
            'artist' =>[],
        〇クリエイト    
            //ユーザのプロフィール作成に使用
            'name' => $data['name'],
            'address' => $data['address'],
            'birthday' => $data['birthday'],
            'introduction' => $data['introduction'],
            'web' => $data['web'],
            'artist' => $data['artist'],