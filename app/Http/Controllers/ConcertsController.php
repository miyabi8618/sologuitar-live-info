<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Concert;

class ConcertsController extends Controller
{
    public function index()
    {
       $concerts = Concert::orderBy('date', 'desc')->get();
       
        
        // コンサートの一覧を公演日の降順で取得
           
        return view('welcome',[
            'concerts' => $concerts,
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
}
