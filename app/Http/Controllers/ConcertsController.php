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

    //地域から探すページ作成（place_concerts）
    public function place_index()
    {
        return view('concerts.place.place_index', [

        ]);        
    }
    
    public function fukuoka()
    {
        $concerts = Concert::where('place', '福岡県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.fukuoka', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function saga()
    {
        $concerts = Concert::where('place', '佐賀県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.saga', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);    
    }
    
    public function nagasaki()
    {
        $concerts = Concert::where('place', '長崎県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.nagasaki', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);    
    }
    
    public function kumamoto()
    {
        $concerts = Concert::where('place', '熊本県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.kumamoto', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function oita()
    {
        $concerts = Concert::where('place', '大分県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.oita', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function miyazaki()
    {
        $concerts = Concert::where('place', '宮崎県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.miyazaki', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function kagoshima()
    {
        $concerts = Concert::where('place', '鹿児島県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.kagoshima', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function okinawa()
    {
        $concerts = Concert::where('place', '沖縄県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kyushu.okinawa', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
}
