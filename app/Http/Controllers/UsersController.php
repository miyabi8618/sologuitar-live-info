<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Concert;

class UsersController extends Controller
{
    public function index()
    {
        //$userに認証済みユーザーを代入
        $user = \Auth::user();
 
        //プロフィールを表示
        //登録したライブ一覧を表示
        //お気に入りアーティストを表示
        //公開したライブ一覧を表示
        $concerts = $user->concerts()->orderBy('date','desc')->paginate(10);
        $data = [
            'user' => $user,
            'concerts' => $concerts,
        ];
        
        return view ('users.index',$data);
    }
    
    
    
    public function search(Request $reqest)
    {
        $search_keyword = $reqest->keyword;
        
        // 指定されたキーワードで検索する
        $users = User::find($search_keyword);
        
        $data = [
            'users' => $users
        ];
        
        return view('users.index', $data);
        
    }
    
    public function create($id)
    {
        $id = \Auth::user()->id;
        //idで検索しユーザーテーブルを取得
        $user = User::findOrFail($id);
        
        //プロフィール作成ビューでそれを表示
        return view('users.create_profile',[
            'user' => $user,
        ]);
    }
    
    public function edit($id)
    {
        $id = \Auth::user()->id;
        //idで検索しユーザーテーブルを取得
        $user = User::findOrFail($id);
        
        // プロフィール編集ビューでそれを表示
        return view('users.edit_profile',[
            'user' => $user,
        ]);

    }
    
    public function update(Request $reqest, $id)
    {
        $id = \Auth::user()->id;
        //idで検索しユーザーテーブルを取得
        $user = User::findOrFail($id);
        //$userを更新
        $user->name = $reqest->name;
        $user->address = $reqest->address;
        $user->birthday = $reqest->birthday;
        $user->introduction = $reqest->introduction;
        $user->web = $reqest->web;
        //$user->artist = $reqest->artist;
        $user->save();
        
        // トップページへリダイレクトさせる（質問リダイレクト方法）
        return redirect('/');
        
    }
    
    public function destroy($id)
    {
        $id = \Auth::user()->id;
        //idで検索しユーザーテーブルを取得
        $user = User::findOrFail($id);
        
        //$userを削除
        $user->delete();
        
        // トップページへリダイレクトさせる
        return redirect('/');
    }
    
    //ライブ情報追加ページへ移動
    public function concert_create()
    {
        $concert = new Concert;
        
        return view('concerts.concert_create',[
            'concert' => $concert,        
        ]);
    }
    
    //ライブ情報フォームからconcertテーブルに格納する
    public function concert_store(Request $reqest)
    {
        $reqest->user()->concerts()->create([
            'title' => $reqest->title,
            'place' => $reqest->place,
            'venue' => $reqest->venue,
            'date' => $reqest->date,
            'content' => $reqest->content,
            'web' => $reqest->web,
        ]);
        
        // トップページへリダイレクトさせる
        return redirect('/');
    }
    public function concert_destroy($id)
    {
        // idの値で投稿を検索して取得
        $concert = Concert::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $concert->user_id) {
            $concert->delete();
        }

        // トップページへリダイレクトさせる
        return redirect('/');
    }
    
        public function concert_edit($id)
    {
        //idで検索しコンサートテーブルを取得
        $concert = Concert::findOrFail($id);
        
        // ライブ情報編集ビューでそれを表示
        return view('concerts.concert_edit',[
            'concert' => $concert,
        ]);

    }
    
    public function concert_update(Request $reqest, $id)
    {
        
        //idで検索しユーザーテーブルを取得
        $concert = Concert::findOrFail($id);
        //$concertを更新
        $concert->title = $reqest->title;
        $concert->place = $reqest->place;
        $concert->venue = $reqest->venue;
        $concert->date = $reqest->date;
        $concert->content = $reqest->content;
        $concert->web = $reqest->web;

        $concert->save();
        
        // トップページへリダイレクトさせる（質問リダイレクト方法）
        return redirect('/');
        
    }
}
