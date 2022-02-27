<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $data = [];
        //$userに認証済みユーザーを代入
        $user = \Auth::user();
        
        //プロフィールを表示
        //登録したライブ一覧を表示
        //お気に入りアーティストを表示
        //公開したライブ一覧を表示
        
        $data = [
            'user' => $user    
        ];
        
        return view ('users.index',$data);
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
        //プロフィール作成ビューでそれを表示
        return view('users.create_profile',[
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
    
}
