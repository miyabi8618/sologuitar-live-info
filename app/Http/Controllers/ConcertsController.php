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

}
