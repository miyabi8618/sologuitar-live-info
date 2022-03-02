<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcertsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // コンサートの一覧を公演日の降順で取得
            $concerts = $user->concerts()->orderBy('date','desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'concerts' => $concerts,
            ];
        }    
            return view('mypage', $data);
    }
}
