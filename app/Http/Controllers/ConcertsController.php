<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Concert;

class ConcertsController extends Controller
{
    
    public function index()
    {
        $concerts = Concert::orderBy('date', 'desc')->paginate(10);
        
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        
        
        
        return view('welcome',[
            'concerts' => $concerts,
            'user' => $artist_user,
        ]);
    }
    
    public function show($id)
    {
        // idの値で該当のconcertを検索して取得
        $concert = Concert::findOrFail($id);
        $user = User::findOrFail($concert->user_id);
        
        

        // ユーザ詳細ビューでそれを表示
        return view('concerts.show', [
            'concert' => $concert,
            'user' => $user,
        ]);
    }


    //検索機能実装    
    public function search(Request $request){
        $concerts = Concert::where('title','like' ,"%{$request->search}%")
                   ->orWhere('content', 'like' ,"%{$request->search}%")
                   ->orwhere('date','like' ,"%{$request->search}%")
                   ->orderBy('date', 'desc')
                   ->paginate(10);
       
        $search_result = $request->search .'の検索結果'.$concerts->total().'件';
        
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        
       return view('welcome',[
            'concerts' => $concerts,
            'user' => $artist_user,
            'search_result' => $search_result,
        ]);
    }

    //ユーザー情報の詳細ページ
    public function user_show($id)
    {
        $user = User::findOrFail($id);
        $concerts = $user->concerts()->orderBy('date','desc')->paginate(10);
        
        return view('concerts.user_show',[
            'user' => $user,
            'concerts' => $concerts,
        ]); 
        
    }
   
   
    //地域から探すページ作成（place_concerts）
    public function place_index()
    {
        return view('concerts.place.place_index', [

        ]);        
    }
    
    public function todoufuken_search(Request $request)
    {
        
        $todoufuken = $request->todoufuken;
        
        $concerts = Concert::where('place', "$todoufuken")->paginate(10);
        
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        
        $search_result = $todoufuken .'の検索結果'.$concerts->total().'件';
        
        return view('concerts.place.todoufuken_search', [
            'todoufuken' => $todoufuken,
            'concerts' => $concerts,
            'user' => $artist_user,
            'search_result' => $search_result,
        ]);
    }

    //ユーザー名から探すページ作成（place_concerts）
    public function keyword_index()
    {
        return view('concerts.keyword.search_users_index', [
        ]);        
    }  
    
    public function users_search(Request $request)
    {
        $keyword = $request->keyword;
        
        $users = User::where('artist',1)
                ->Where('ruby', 'like', $keyword . '%')
                ->paginate(50);   
        return view('concerts.keyword.users_search', [
            'keyword' => $keyword,
            'users' => $users, 
        ]);
        
    }
    
    public function a()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'あ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.a', [
            'users' => $users, 
        ]);
    }
    public function i()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'い%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.i', [
            'users' => $users, 
        ]);
    }
    public function u()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'う%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.u', [
            'users' => $users, 
        ]);
    }
    public function e()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'え%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.e', [
            'users' => $users, 
        ]);
    }
    public function o()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'お%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.o', [
            'users' => $users, 
        ]);
    }
    public function ka()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'か%')
                        ->Where('ruby', 'like', 'が%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ka', [
            'users' => $users, 
        ]);
    }
    public function ki()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'き%')
                        ->Where('ruby', 'like', 'ぎ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ki', [
            'users' => $users, 
        ]);
    }
    public function ku()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'く%')
                        ->Where('ruby', 'like', 'ぐ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ku', [
            'users' => $users, 
        ]);
    }
    public function ke()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'け%')
                        ->Where('ruby', 'like', 'げ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ke', [
            'users' => $users, 
        ]);
    }
    public function ko()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'こ%')
                        ->Where('ruby', 'like', 'ご%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ko', [
            'users' => $users, 
        ]);
    }
    public function sa()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'さ%')
                        ->Where('ruby', 'like', 'ざ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.sa', [
            'users' => $users, 
        ]);
    }
    public function si()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'し%')
                        ->Where('ruby', 'like', 'じ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.si', [
            'users' => $users, 
        ]);
    }
    public function su()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'す%')
                        ->Where('ruby', 'like', 'ず%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.su', [
            'users' => $users, 
        ]);
    }
    public function se()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'せ%')
                        ->Where('ruby', 'like', 'ぜ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.se', [
            'users' => $users, 
        ]);
    }
    public function so()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'そ%')
                        ->Where('ruby', 'like', 'ぞ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.so', [
            'users' => $users, 
        ]);
    }
    public function ta()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'た%')
                        ->Where('ruby', 'like', 'だ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ta', [
            'users' => $users, 
        ]);
    }
    public function ti()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ち%')
                        ->Where('ruby', 'like', 'ぢ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ti', [
            'users' => $users, 
        ]);
    }
    public function tu()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'つ%')
                        ->Where('ruby', 'like', 'づ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.tu', [
            'users' => $users, 
        ]);
    }
    public function te()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'て%')
                        ->Where('ruby', 'like', 'で%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.te', [
            'users' => $users, 
        ]);
    }
    public function to()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'と%')
                        ->Where('ruby', 'like', 'ど%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.to', [
            'users' => $users, 
        ]);
    }
    public function na()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'な%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.na', [
            'users' => $users, 
        ]);
    }
    public function ni()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'に%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ni', [
            'users' => $users, 
        ]);
    }
    public function nu()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ぬ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.nu', [
            'users' => $users, 
        ]);
    }
    public function ne()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ね%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ne', [
            'users' => $users, 
        ]);
    }
    public function no()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'の%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.no', [
            'users' => $users, 
        ]);
    }
    public function ha()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'は%')
                        ->Where('ruby', 'like', 'ば%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ha', [
            'users' => $users, 
        ]);
    }
    public function hi()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ひ%')
                        ->Where('ruby', 'like', 'び%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.hi', [
            'users' => $users, 
        ]);
    }
    public function hu()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ふ%')
                        ->Where('ruby', 'like', 'ぶ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.hu', [
            'users' => $users, 
        ]);
    }
    public function he()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'へ%')
                        ->Where('ruby', 'like', 'べ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.he', [
            'users' => $users, 
        ]);
    }
    public function ho()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ほ%')
                        ->Where('ruby', 'like', 'ぼ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ho', [
            'users' => $users, 
        ]);
    }
    public function ma()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ま%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ma', [
            'users' => $users, 
        ]);
    }
    public function mi()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'み%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.mi', [
            'users' => $users, 
        ]);
    }
    public function mu()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'む%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.mu', [
            'users' => $users, 
        ]);
    }
    public function me()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'め%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.me', [
            'users' => $users, 
        ]);
    }
    public function mo()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'も%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.mo', [
            'users' => $users, 
        ]);
    }
    public function ya()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'や%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ya', [
            'users' => $users, 
        ]);
    }
    public function yu()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ゆ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.yu', [
            'users' => $users, 
        ]);
    }
    public function yo()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'よ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.yo', [
            'users' => $users, 
        ]);
    }
    public function ra()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ら%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ra', [
            'users' => $users, 
        ]);
    }
    public function ri()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'り%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ri', [
            'users' => $users, 
        ]);
    }
    public function ru()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'る%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ru', [
            'users' => $users, 
        ]);
    }
    public function re()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'れ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.re', [
            'users' => $users, 
        ]);
    }
    public function ro()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ろ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.ro', [
            'users' => $users, 
        ]);
    }
    public function wa()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'わ%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.wa', [
            'users' => $users, 
        ]);
    }
    public function wo()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'を%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.wo', [
            'users' => $users, 
        ]);
    }
    public function wu()
    {
        $users = User::where('artist',1)
                        ->Where('ruby', 'like', 'ん%')
                        ->paginate(50);   
        return view('concerts.search_users.search_word.wu', [
            'users' => $users, 
        ]);
    }
    
    
    
    
    

}
