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
        $favorite_concerts = $user->favorites()->orderBy('created_at','desc')->paginate(10);
        //お気に入りアーティストを表示
        $follow_users = $user->followings()->orderBy('created_at','desc')->paginate(10);
        
        //公開したライブ一覧を表示
        $concerts = $user->concerts()->orderBy('date','desc')->paginate(10);
        $data = [
            'user' => $user,
            'concerts' => $concerts,
            'follow_users' => $follow_users,
            'favorite_concerts' => $favorite_concerts,
        ];
        
        return view ('users.index',$data);
    }
    
    
    
    public function search(Request $request)
    {
        $search_keyword = $request->keyword;
        
        // 指定されたキーワードで検索する
        $users = User::find($search_keyword);
        
        $data = [
            'users' => $users
        ];
        
        return view('users.index', $data);
        
    }
    
    //アカウント作成後のユーザー情報作成ページ(未作成)

    
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
    
    public function update(Request $request, $id)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|max:255',
            'ruby' => 'required|max:255',
        ]);
        
        $id = \Auth::user()->id;
        //idで検索しユーザーテーブルを取得
        $user = User::findOrFail($id);
        //$userを更新
        $user->name = $request->name;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->introduction = $request->introduction;
        $user->web = $request->web;
        $user->artist = $request->artist;
        $user->ruby = $request->ruby;
        $user->save();
        
        // ユーザページへリダイレクトさせる
        return redirect('users');
        
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
    public function concert_store(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'place' => 'required|max:255',
            'venue' => 'required|max:255',
            'date' => 'required|max:255',
        ]);
        
        $request->user()->concerts()->create([
            'title' => $request->title,
            'place' => $request->place,
            'venue' => $request->venue,
            'date' => $request->date,
            'content' => $request->content,
            'web' => $request->web,
        ]);
        
        // トップページへリダイレクトさせる
        return redirect('users');
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
        return redirect('users');
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
    
    //コンサートをアップデートする
    public function concert_update(Request $request, $id)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'place' => 'required|max:255',
            'venue' => 'required|max:255',
            'date' => 'required|max:255',
        ]);
        
        //idで検索しユーザーテーブルを取得
        $concert = Concert::findOrFail($id);
        //$concertを更新
        $concert->title = $request->title;
        $concert->place = $request->place;
        $concert->venue = $request->venue;
        $concert->date = $request->date;
        $concert->content = $request->content;
        $concert->web = $request->web;

        $concert->save();
        
        // トップページへリダイレクトさせる（質問リダイレクト方法）
        return redirect('users');
        
    }
}
