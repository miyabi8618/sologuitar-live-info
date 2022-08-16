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
}
