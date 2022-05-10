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
    
    public function hokkaido()
    {
        $concerts = Concert::where('place', '北海道')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.hokkaido', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function aomori()
    {
        $concerts = Concert::where('place', '青森県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.aomori', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }  

    public function iwate()
    {
        $concerts = Concert::where('place', '岩手県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.iwate', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }    
    
    public function miyagi()
    {
        $concerts = Concert::where('place', '宮城県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.miyagi', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function akita()
    {
        $concerts = Concert::where('place', '秋田県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.akita', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }    
    
    public function yamagata()
    {
        $concerts = Concert::where('place', '山形県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.yamagata', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function fukushima()
    {
        $concerts = Concert::where('place', '福島県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.tohoku.fukushima', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function ibaraki()
    {
        $concerts = Concert::where('place', '茨城県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.ibaraki', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function tochigi()
    {
        $concerts = Concert::where('place', '栃木県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.tochigi', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function gunma()
    {
        $concerts = Concert::where('place', '群馬県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.gunma', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function saitama()
    {
        $concerts = Concert::where('place', '埼玉県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.saitama', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function chiba()
    {
        $concerts = Concert::where('place', '千葉県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.chiba', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function tokyo()
    {
        $concerts = Concert::where('place', '東京都')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.tokyo', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function kanagawa()
    {
        $concerts = Concert::where('place', '神奈川県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kanto.kanagawa', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function niigata()
    {
        $concerts = Concert::where('place', '新潟県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.niigata', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function toyama()
    {
        $concerts = Concert::where('place', '富山県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.toyama', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function ishikawa()
    {
        $concerts = Concert::where('place', '石川県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.ishikawa', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function fukui()
    {
        $concerts = Concert::where('place', '福井県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.fukui', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function yamanashi()
    {
        $concerts = Concert::where('place', '山梨県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.yamanashi', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function nagano()
    {
        $concerts = Concert::where('place', '長野県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.nagano', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function gifu()
    {
        $concerts = Concert::where('place', '岐阜県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.gifu', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function shizuoka()
    {
        $concerts = Concert::where('place', '静岡県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.shizuoka', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function aichi()
    {
        $concerts = Concert::where('place', '愛知県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chubu.aichi', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function mie()
    {
        $concerts = Concert::where('place', '三重県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.mie', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function shiga()
    {
        $concerts = Concert::where('place', '滋賀県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.shiga', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function kyoto()
    {
        $concerts = Concert::where('place', '京都府')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.kyoto', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function osaka()
    {
        $concerts = Concert::where('place', '大阪府')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.osaka', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
 
    public function hyogo()
    {
        $concerts = Concert::where('place', '兵庫県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.hyogo', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function nara()
    {
        $concerts = Concert::where('place', '奈良県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.nara', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
        
    public function wakayama()
    {
        $concerts = Concert::where('place', '和歌山県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.kinki.wakayama', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function tottori()
    {
        $concerts = Concert::where('place', '鳥取県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chugoku.tottori', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function shimane()
    {
        $concerts = Concert::where('place', '島根県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chugoku.shimane', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    public function okayama()
    {
        $concerts = Concert::where('place', '岡山県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chugoku.okayama', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    public function hiroshima()
    {
        $concerts = Concert::where('place', '広島県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chugoku.hiroshima', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    public function yamaguchi()
    {
        $concerts = Concert::where('place', '山口県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.chugoku.yamaguchi', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }

    
    public function tokushima()
    {
        $concerts = Concert::where('place', '徳島県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.shikoku.tokushima', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
        
    public function kagawa()
    {
        $concerts = Concert::where('place', '香川県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.shikoku.kagawa', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function ehime()
    {
        $concerts = Concert::where('place', '愛媛県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.shikoku.ehime', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }
    
    public function kochi()
    {
        $concerts = Concert::where('place', '高知県')->paginate(10);
        $users = User::where('artist',1)->get();
        $artist_user = [];
        foreach($users as $user){
           $artist_user[] = $user->id;
        }
        return view('concerts.place.shikoku.kochi', [
            'concerts' => $concerts,
            'user' => $artist_user, 
        ]);
    }

    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
