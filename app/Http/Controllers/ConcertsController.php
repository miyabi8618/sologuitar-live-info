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
}
